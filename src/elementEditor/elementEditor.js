function clearAll()
{
	$( "form" )[ 0 ].reset();
	$( "li" ).remove();
}

function addAttribute()
{
	cloneTemplate( "#attributeTemplate", "#attributesList", ".attribute" );
}

function addConstant()
{
	cloneTemplate( "#constantTemplate", "#constantsList", ".constant" );
}

function addConstructorParameter()
{
	cloneTemplate( "#parameterTemplate", "#constructorParametersList",
		"#constructorParametersList .parameter" );
}

function addCustomMethod()
{
	var template = $( "#customMethodTemplate" );
	var templateInstance = template.html();
	$( "#customMethodsList" ).append( templateInstance );
	
	var instantiatedInstance = $( ".customMethod:last-child" );
	instantiatedInstance.find( ".removeButton" ).click( removeAttribute );
	instantiatedInstance.find( ".addButton" ).click( addCustomMethodParameter );
}

function addCustomMethodParameter( event )
{
	var caller = event.target;
	
	var template = $( "#parameterTemplate" );
	var templateInstance = template.html();
	var list = $( caller ).closest( ".inputContainer" ).find( ".customMethodParametersList" );
	list.append( templateInstance );
	list.find( ".parameter:last-child" ).find( ".removeButton" ).click( removeAttribute );
}

function removeAttribute( event )
{
	removeTemplateInstance( event.target );
}

function removeConstant( event )
{
	removeTemplateInstance( event.target );
}

function removeConstructorParameter( event )
{
	removeTemplateInstance( event.target );
}

function removeCustomMethod( event )
{
	removeTemplateInstance( event.target );
}

function removeCustomMethodParameter( event )
{
	removeTemplateInstance( event.target );
}

function cloneTemplate( templateSelector, listSelector, instanceSelector )
{
	var template = $( templateSelector );
	var templateInstance = template.html();
	$( listSelector ).append( templateInstance );
	$( instanceSelector + ":last-child" ).find( ".removeButton" ).click( removeAttribute );
}

function removeTemplateInstance( caller )
{
	$( caller ).closest( "li" ).remove();
}

function save()
{
	// Create the element object from the form data
	var elementObject = buildElementObject();
	
	// Write the object to the json file
	saveElementToFile( elementObject );
}

function buildElementObject()
{
	var element = { };
	element.name = "blah";
	
	return element;
}

function saveElementToFile( element )
{
	$.ajax
	(
		{
			url: "saveElement.php",
			method: "POST",
			data: JSON.stringify( element )
		}
	).done( saveElementToFileComplete );
}

function saveElementToFileComplete( result )
{
	// alert( result );
}