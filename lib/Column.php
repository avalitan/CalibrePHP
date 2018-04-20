<?php
/**
 *  
 *  
 *  @author Avalitan <avalitan@avalitan.com>
 */

/*
"bool"
"comments"
"composite": is_multiple
"datetime"
"enumeration"
"float"
"int"
"rating"
"series"
"text": is_multiple

name			datatype		is_multiple(TAG)		normalized		display
"Text"			"text"			"0"						"1"				"{"use_decorations": 0}"
"CSV"			"text"			"1"						"1"				"{"is_names": false}"
"Long Text"		"comments"		"0"						"0"				"{"heading_position": "hide", "interpret_as": "html"}"
"Series"		"series"		"0"						"1"				""
"List"			"enumeration"	"0"						"1"				"{"enum_values": ["1", "2", "3"], "use_decorations": 0, "enum_colors": ["red", "green", "blue"]}"
"Date"			"datetime"		"0"						"0"				"{"date_format": "yyyy-mm-dd"}"
"Float"			"float"			"0"						"0"				"{"number_format": null}"
"Int"			"int"			"0"						"0"				"{"number_format": null}"
"Rating"		"rating"		"0"						"1"				"{"allow_half_stars": true}"
"Bool"			"bool"			"0"						"0"				""
"Composite"		"composite"		"0"						"0"				"{"use_decorations": 0, "composite_template": "{uuid}", "contains_html": false, "make_category": false, "composite_sort": "text"}"
"Composite Tag"	"composite"		"1"						"0"				"{"composite_sort": "text", "contains_html": false, "composite_template": "{uuid}", "make_category": false}"

Included in all:
"description": ""

SELECT classname: SELECT *, 'Column-' || datatype || '-' || is_multiple AS classname FROM custom_columns;



{
  "#genre": {
    "category_sort": "value", 
    "colnum": 2, 
    "column": "value", 
    "datatype": "text", 
    "display": {
      "description": "", 
      "is_names": false
    }, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": true, 
    "is_editable": true, 
    "is_multiple": {
      "cache_to_list": "|", 
      "list_to_ui": ", ", 
      "ui_to_list": ","
    }, 
    "kind": "field", 
    "label": "genre", 
    "link_column": "value", 
    "name": "Genre", 
    "rec_index": 22, 
    "search_terms": [
      "#genre"
    ], 
    "table": "custom_column_2"
  }, 
  "#uuid": {
    "category_sort": "value", 
    "colnum": 1, 
    "column": "value", 
    "datatype": "composite", 
    "display": {
      "composite_sort": "text", 
      "composite_template": "{uuid}", 
      "contains_html": false, 
      "description": "", 
      "make_category": false, 
      "use_decorations": 0
    }, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": true, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "uuid", 
    "link_column": "value", 
    "name": "UUID", 
    "rec_index": 23, 
    "search_terms": [
      "#uuid"
    ], 
    "table": "custom_column_1"
  }, 
  "au_map": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {
      "cache_to_list": ",", 
      "list_to_ui": null, 
      "ui_to_list": null
    }, 
    "kind": "field", 
    "label": "au_map", 
    "name": null, 
    "rec_index": 18, 
    "search_terms": [], 
    "table": null
  }, 
  "author_sort": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "author_sort", 
    "name": "Author sort", 
    "rec_index": 12, 
    "search_terms": [
      "author_sort"
    ], 
    "table": null
  }, 
  "authors": {
    "category_sort": "sort", 
    "column": "name", 
    "datatype": "text", 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {
      "cache_to_list": ",", 
      "list_to_ui": " & ", 
      "ui_to_list": "&"
    }, 
    "kind": "field", 
    "label": "authors", 
    "link_column": "author", 
    "name": "Authors", 
    "rec_index": 2, 
    "search_terms": [
      "authors", 
      "author"
    ], 
    "table": "authors"
  }, 
  "comments": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "comments", 
    "name": "Comments", 
    "rec_index": 7, 
    "search_terms": [
      "comments", 
      "comment"
    ], 
    "table": null
  }, 
  "cover": {
    "column": null, 
    "datatype": "int", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "cover", 
    "name": "Cover", 
    "rec_index": 17, 
    "search_terms": [
      "cover"
    ], 
    "table": null
  }, 
  "formats": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {
      "cache_to_list": ",", 
      "list_to_ui": ", ", 
      "ui_to_list": ","
    }, 
    "kind": "field", 
    "label": "formats", 
    "name": "Formats", 
    "rec_index": 13, 
    "search_terms": [
      "formats", 
      "format"
    ], 
    "table": null
  }, 
  "id": {
    "column": null, 
    "datatype": "int", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "id", 
    "name": null, 
    "rec_index": 0, 
    "search_terms": [
      "id"
    ], 
    "table": null
  }, 
  "identifiers": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": true, 
    "is_csp": true, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {
      "cache_to_list": ",", 
      "list_to_ui": ", ", 
      "ui_to_list": ","
    }, 
    "kind": "field", 
    "label": "identifiers", 
    "name": "Identifiers", 
    "rec_index": 20, 
    "search_terms": [
      "identifiers", 
      "identifier", 
      "isbn"
    ], 
    "table": null
  }, 
  "languages": {
    "category_sort": "lang_code", 
    "column": "lang_code", 
    "datatype": "text", 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {
      "cache_to_list": ",", 
      "list_to_ui": ", ", 
      "ui_to_list": ","
    }, 
    "kind": "field", 
    "label": "languages", 
    "link_column": "lang_code", 
    "name": "Languages", 
    "rec_index": 21, 
    "search_terms": [
      "languages", 
      "language"
    ], 
    "table": "languages"
  }, 
  "last_modified": {
    "column": null, 
    "datatype": "datetime", 
    "display": {
      "date_format": "dd MMM yyyy"
    }, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "last_modified", 
    "name": "Modified", 
    "rec_index": 19, 
    "search_terms": [
      "last_modified"
    ], 
    "table": null
  }, 
  "marked": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "marked", 
    "name": null, 
    "rec_index": 25, 
    "search_terms": [
      "marked"
    ], 
    "table": null
  }, 
  "news": {
    "category_sort": "name", 
    "column": "name", 
    "datatype": null, 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "category", 
    "label": "news", 
    "name": "News", 
    "search_terms": [], 
    "table": "news"
  }, 
  "ondevice": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "ondevice", 
    "name": "On device", 
    "rec_index": 24, 
    "search_terms": [
      "ondevice"
    ], 
    "table": null
  }, 
  "path": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "path", 
    "name": "Path", 
    "rec_index": 14, 
    "search_terms": [], 
    "table": null
  }, 
  "pubdate": {
    "column": null, 
    "datatype": "datetime", 
    "display": {
      "date_format": "MMM yyyy"
    }, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "pubdate", 
    "name": "Published", 
    "rec_index": 15, 
    "search_terms": [
      "pubdate"
    ], 
    "table": null
  }, 
  "publisher": {
    "category_sort": "name", 
    "column": "name", 
    "datatype": "text", 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "publisher", 
    "link_column": "publisher", 
    "name": "Publisher", 
    "rec_index": 9, 
    "search_terms": [
      "publisher"
    ], 
    "table": "publishers"
  }, 
  "rating": {
    "category_sort": "rating", 
    "column": "rating", 
    "datatype": "rating", 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "rating", 
    "link_column": "rating", 
    "name": "Rating", 
    "rec_index": 5, 
    "search_terms": [
      "rating"
    ], 
    "table": "ratings"
  }, 
  "series": {
    "category_sort": "(title_sort(name))", 
    "column": "name", 
    "datatype": "series", 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "series", 
    "link_column": "series", 
    "name": "Series", 
    "rec_index": 8, 
    "search_terms": [
      "series"
    ], 
    "table": "series"
  }, 
  "series_index": {
    "column": null, 
    "datatype": "float", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "series_index", 
    "name": null, 
    "rec_index": 10, 
    "search_terms": [
      "series_index"
    ], 
    "table": null
  }, 
  "series_sort": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "series_sort", 
    "name": "Series sort", 
    "rec_index": 26, 
    "search_terms": [
      "series_sort"
    ], 
    "table": null
  }, 
  "size": {
    "column": null, 
    "datatype": "float", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "size", 
    "name": "Size", 
    "rec_index": 4, 
    "search_terms": [
      "size"
    ], 
    "table": null
  }, 
  "sort": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "sort", 
    "name": "Title sort", 
    "rec_index": 11, 
    "search_terms": [
      "title_sort"
    ], 
    "table": null
  }, 
  "tags": {
    "category_sort": "name", 
    "column": "name", 
    "datatype": "text", 
    "display": {}, 
    "is_category": true, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {
      "cache_to_list": ",", 
      "list_to_ui": ", ", 
      "ui_to_list": ","
    }, 
    "kind": "field", 
    "label": "tags", 
    "link_column": "tag", 
    "name": "Tags", 
    "rec_index": 6, 
    "search_terms": [
      "tags", 
      "tag"
    ], 
    "table": "tags"
  }, 
  "timestamp": {
    "column": null, 
    "datatype": "datetime", 
    "display": {
      "date_format": "dd MMM yyyy"
    }, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "timestamp", 
    "name": "Date", 
    "rec_index": 3, 
    "search_terms": [
      "date"
    ], 
    "table": null
  }, 
  "title": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "title", 
    "name": "Title", 
    "rec_index": 1, 
    "search_terms": [
      "title"
    ], 
    "table": null
  }, 
  "uuid": {
    "column": null, 
    "datatype": "text", 
    "display": {}, 
    "is_category": false, 
    "is_csp": false, 
    "is_custom": false, 
    "is_editable": true, 
    "is_multiple": {}, 
    "kind": "field", 
    "label": "uuid", 
    "name": null, 
    "rec_index": 16, 
    "search_terms": [
      "uuid"
    ], 
    "table": null
  }
}
*/

namespace Avalitan\CalibrePHP {
	class Column {
		protected $description = "";
		protected $id = null;
		protected $sql = array();
		protected $table = '';
		
	}
	
	class Column-text extends Column {
		// 
		
	}
	
	class Column-text0 extends Column-text {
		// {"use_decorations": 0}
		protected $use_decorations = 0
	}
	
	class Column-text1 extends Column-text {
		// {"is_names": false}
		protected $is_names = false
	}
	
	class Column-comments0 extends Column {
		// "heading_position": "hide", "interpret_as": "html"
		protected $heading_position = "";
		protected $interpret_as = "";
	}
	
	class Column-series0 extends Column {
		// 
		
	}
	
	class Column-enumeration0 extends Column {
		// {"enum_values": ["1", "2", "3"], "use_decorations": 0, "enum_colors": ["red", "green", "blue"]}
		protected $enum_values = array();
		protected $enum_colors = array();
		protected $use_decorations = "";
	}
	
	class Column-datetime0 extends Column {
		// {"date_format": ""}
		protected $date_format = "";
	}
	
	class Column-float0 extends Column {
		// {"number_format": null}
		protected $number_format = null;
	}
	
	class Column-int0 extends Column {
		// {"number_format": null}
		protected $number_format = "";
	}
	
	class Column-rating0 extends Column {
		// {"allow_half_stars": false}
		protected $allow_half_stars = false;
	}
	
	class Column-bool0 extends Column {
		// 
		
	}
	
	class Column-composite extends Column {
		// {"composite_template": "{uuid}", "contains_html": false, "make_category": false, "composite_sort": "text"}
		protected $composite_template = "";
		protected $contains_html = false;
		protected $make_category = false;
		protected $composite_sort = "";
		
	}
	
	class Column-composite0 extends Column-composite {
		// {"use_decorations": 0}
		protected $use_decorations = "";
	}
	
	class Column-composite1 extends Column-composite {
		// 
		
	}
	
	// Custom Columns:
	/*
	CREATE TABLE custom_column_1( -- composite0
		book INTEGER, 
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_2( -- 
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_3(
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_4(
		book INTEGER, 
		value timestamp NOT NULL 
	)
	CREATE TABLE custom_column_5(
		book INTEGER, 
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_6(
		value INT NOT NULL 
	)
	CREATE TABLE custom_column_7(
		book INTEGER, 
		value BOOL NOT NULL 
	)
	CREATE TABLE custom_column_8( -- composite1
		book INTEGER, 
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_9(
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_10(
		book INTEGER, 
		value REAL NOT NULL 
	)
	CREATE TABLE custom_column_11(
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_12(
		value TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE custom_column_13(
		book INTEGER, 
		value INT NOT NULL 
	)
	*/
	
	// Standard Columns:
	/*
	CREATE TABLE authors (
		name TEXT NOT NULL COLLATE NOCASE,
		sort TEXT COLLATE NOCASE,
		link TEXT NOT NULL DEFAULT ""
	)
	CREATE TABLE comments (
		book INTEGER NOT NULL,
		text TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE feeds (
		title TEXT NOT NULL,
		script TEXT NOT NULL
	)
	CREATE TABLE identifiers (
		book INTEGER NOT NULL,
		type TEXT NOT NULL DEFAULT "isbn" COLLATE NOCASE,
		val TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE languages (
		lang_code TEXT NOT NULL COLLATE NOCASE
	)
	CREATE TABLE publishers (
		name TEXT NOT NULL COLLATE NOCASE,
		sort TEXT COLLATE NOCASE
	)
	CREATE TABLE ratings (
		rating INTEGER CHECK(rating > -1 AND rating < 11)
	)
	CREATE TABLE series (
		name TEXT NOT NULL COLLATE NOCASE,
		sort TEXT COLLATE NOCASE
	)
	CREATE TABLE tags (
		name TEXT NOT NULL COLLATE NOCASE
	)
	
	*/

	class Authors extends Column-text0 {
		$this->table = 'authors';
	}
	class Languages extends Column-text0 {
		$this->table = 'languages';
	}
	class Series extends Column-series0 {
		$this->table = 'series';
	}
	class Formats extends __ {
		$this->table = '__';
	}
	class Publisher extends __ {
		$this->table = 'publishers';
	}
	class Rating extends Column-rating0 {
		$this->table = 'ratings';
	}
	class News extends Tags { // tags:"=News"
		
	}
	class Tags extends Column-text1 {
		$this->table = 'tags';
	}
	class Identifiers extends __ {
		$this->table = 'identifiers';
	}
}