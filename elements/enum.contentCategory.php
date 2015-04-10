<?php
	abstract class ContentCategory
	{
		const METADATA					= 0;
		const FLOW						= 1;
		const SECTIONING				= 2;
		const HEADING					= 3;
		const PHRASING					= 4;
		const EMBEDDED					= 5;
		const INTERACTIVE				= 6;
		const FORM_ASSOCIATED			= 7;
		const SECTIONING_ROOT			= 8;
		const PALPABLE					= 9;
		const TRANSPARENT				= 10;
		const LISTED					= 11;
		const SUBMITTABLE				= 12;
		const RESETTABLE				= 13;
		const FORM_ASSOCIATED_ELEMENT	= 14;
		const LABELABLE					= 15;
		const REASSOCIATEABLE			= 16;
		const SCRIPT_SUPPORTING_ELEMENT = 17;
		
		private static $contentCategoryTree;
		
		private static function buildContentCategoryTree()
		{
			self::$contentCategoryGraph = array();
			
			$reflection = new ReflectionClass( "ContentCategory" );
			$contentCategories = $reflection->getConstant();
			
			//Initialize with false values
			foreach( $contentCategories as $fromIndex )
			{
				self::$contentCateogoryGraph[ $fromIndex ] = array();
				
				foreach( $contentCategories as $toIndex )
				{
					self::$contentCategoriesGraph[ $fromIndex ][ $toIndex ] =
						false;
				}
			}
			
			//Add the children..
			self::addTreeChild( self::FLOW, self::SECTIONING );
			self::addTreeChild( self::FLOW, self::PHRASING );
			self::addTreeChild( self::FLOW, self::INTERACTIVE );
			self::addTreeChild( self::FLOW, self::HEADING );
			self::addTreeChild( self::FLOW, self::FORM_ASSOCIATED );
			self::addTreeChild( self::FLOW, self::PALPABLE );
			self::addTreeChild( self::FLOW, self::EMBEDDED );
			self::addTreeChild( self::FLOW, self::SUBMITTABLE );
			self::addTreeChild( self::FLOW, self::LISTED );
			self::addTreeChild( self::FLOW, self::REASSOCIATEABLE );
			self::addTreeChild( self::FLOW, self::LABELLABLE );
			self::addTreeChild( self::FLOW, self::RESETTABLE );
			self::addTreeChild( self::FLOW, self::FORM_ASSOCIATED_ELEMENT );
			
			self::addTreeChild( self::PHRASING, self::EMBEDDED );
			
			self::addTreeChild( self::FORM_ASSOCIATED, self::SUBMITTABLE );
			self::addTreeChild( self::FORM_ASSOCIATED, self::LISTED );
			self::addTreeChild( self::FORM_ASSOCIATED, self::REASSOCIATEABLE );
			self::addTreeChild( self::FORM_ASSOCIATED, self::LABELLABLE );
			self::addTreeChild( self::FORM_ASSOCIATED, self::RESETTABLE );
			self::addTreeChild( self::FORM_ASSOCIATED,
				self::FORM_ASSOCIATED_ELEMENT );
		}
		
		private static function addTreeChild( $from, $to )
		{
			self::$contentCategoryGraph[ $from ][ $to ] = true;
		}
		
		/**
		 * Determine if the first category is a child of the second category.
		 * Also will return true if the two categories are the same.
		 * @param ContentCategory $childCategory
		 * @param ContentCategory $parentCategory
		 * @return boolean
		 */
		public static function isChildOfCategory( $childCategory,
			$parentCategory )
		{
			//Build the tree if it is not already built
			if ( ! isset( self::$contentCategoryTree ) )
			{
				self::buildContentCategoryTree();
			}
			
			return 
				self::$contentCategoryTree[ $parentCategory ][
					$childCategory ] ||
				$parentCategory === $childCategory;
		}
	}
?>