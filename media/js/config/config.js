/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */
CKEDITOR.editorConfig = function( config ) {
    config.toolbar_DrupalCustom = [
      ['Source'],
      ['Cut','Copy','Paste','PasteText','-','SpellChecker', 'Scayt'],
      ['Undo','Redo','Find','Replace','-','SelectAll','RemoveFormat'],
      ['Image','HorizontalRule','Smiley','SpecialChar'],
      ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
      ['NumberedList','BulletedList','-','Blockquote'],
      ['Link','Unlink','Anchor','LinkToNode', 'LinkToMenu'],      
      ['Format','Font','FontSize'],
      ['TextColor','BGColor'],
      ['Maximize', 'ShowBlocks'],
      ['DrupalBreak', 'DrupalPageBreak']
     ];
};