﻿<?php defined('SYSPATH') or die('No direct script access.');
 
class HTML extends Kohana_HTML
{
	/**
	 * CKEditor для textarea
	 *
	 * @param $name
	 * @param string $value
	 * @param string $height
	 * @param string $width
	 * @return string

	 HTML::wysiwyg('test', $value = '');	 
	 
	 Исходные тексты автора AmberLEX - http://forum.kohanaframework.su/viewtopic.php?f=38&t=347
	 Форкнуто - RuslanCC - http://ruslan.cc/
	 */
	public static function wysiwyg($name, $value = '', $css = '/media/css/ckeditor.css', $height = '260', $width = '98%')
	{
		$url_base = URL::base();
	
		include_once(DOCROOT.'media/libs/ckeditor/ckeditor.php');
		include_once(DOCROOT.'media/libs/ckfinder/ckfinder.php');
	
		$CKEditor = new CKEditor();
		$CKEditor->basePath = $url_base . 'media/libs/ckeditor/';
	
		$CKEditor->config['height'] = $height . 'px';
		$CKEditor->config['width']  = $width;
	
		$CKEditor->config['filebrowserBrowseUrl']      = $url_base . 'media/libs/ckfinder/ckfinder.html';
		$CKEditor->config['filebrowserImageBrowseUrl'] = $url_base . 'media/libs/ckfinder/ckfinder.html?type=Images';
		$CKEditor->config['filebrowserFlashBrowseUrl'] = $url_base . 'media/libs/ckfinder/ckfinder.html?type=Flash';
		$CKEditor->config['filebrowserUploadUrl']      = $url_base . 'media/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		$CKEditor->config['filebrowserImageUploadUrl'] = $url_base . 'media/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
		$CKEditor->config['filebrowserFlashUploadUrl'] = $url_base . 'media/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	
		$config['uiColor'] = '#efefef';
		
		$config['contentsCss'] = $css;
	
		// Кнопки (добавляем/убираем)
		$config['toolbar'] = array(
			array('Source','-', 'Maximize', 'ShowBlocks'),
			array('Cut','Copy','Paste','PasteText','PasteFromWord'),
			array('Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'),
			array('Link','Unlink','Anchor'),
			array('Image','Table','HorizontalRule','SpecialChar','PageBreak'),
			'/',
			array('Format', 'Bold','Italic','Underline','Strike',),
			array('JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','NumberedList','BulletedList'),
			array('Outdent','Indent','-','TextColor','BGColor','-','Subscript','Superscript'),
			array('uiColor')
		);
	
		ob_start();
		$CKEditor->editor($name, $value, $config);
		return ob_get_clean();
	}     
}