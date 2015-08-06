<?php
	require_once( __DIR__ . "/class.labelledInput.php" );
	require_once( __DIR__ . "/../elements/instances/class.dataList.php" );
	require_once( __DIR__ . "/../elements/instances/class.div.php" );
	
	class SearchableDataList extends Div
	{		
		private $_dataList;
		public function getDataList() { return $this->_dataList; }
		
		private $_labelledText;
		public function getLabelledText() { return $this->_labelledText; }
		
		public function __construct( $inputLabelText, DataList $dataList )
		{
			parent::__construct();
			
			//Make sure the <datalist> has an ID
			if ( ! $dataList->hasAttribute( "id" ) )
			{
				$errorMessage = "The provided DataList in the " .
					"SearchableDataList construct must have an ID attribute " .
					"set";
				throw new InvalidArgumentException( $errorMessage );
			}
			$this->_dataList = $dataList;
			
			$this->initSelf();
			$this->initTextInput( $inputLabelText );
			$this->initDataList( $dataList );
		}
		
		private function initSelf()
		{
			$this->addClass( "searchableDataList" );
		}
		
		private function initTextInput( $inputLabelText )
		{
			$this->_labelledText = new LabelledInput( $inputLabelText, "text" );
			$this->_labelledText->addClass( "searchableDataListLabelledText" );
			$this->_labelledText->getInput()->addClass(
				"searchableDataListInput" );
			$this->_labelledText->getInput()->setList(
				$this->_dataList->getAttributeValue( "id" ) );
			$this->_labelledText->getLabel()->addClass(
				"searachableDataListLabel" );
			$this->addChild( $this->_labelledText );
		}
		
		private function initDataList( DataList $dataList )
		{
			$this->_dataList = $dataList;
			$this->_dataList->addClass( "searchableDataListDataList" );
			$this->addChild( $this->_dataList );
		}
	}
?>