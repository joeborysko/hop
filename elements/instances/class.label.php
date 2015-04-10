<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Label extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "label" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING,
				ContentCategory::INTERACTIVE,
				ContentCategory::FORM_ASSOCIATED_ELEMENT,
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				! $child instanceof Label &&
				$child->hasContentCategory( ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
		
		public function setFor( $idLabelableElement )
		{
			$this->setAttribute( "for", $idLabelableElement );
		}
		
		public function setForm( $idFormOwner )
		{
			$this->setAttribute( "form", $idFormOwner );
		}
	}
?>