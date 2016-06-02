<?php
/*
+-----------------------------------------------------------------------------+
| MobileQuiz open source                                                      |
+-----------------------------------------------------------------------------+
| Copyright 2011 Stephan Schulz                                               |
|                                                                             |
| MobileQuiz is free software: you can redistribute it and/or modify          |
| it under the terms of the GNU General Public License as published by        |
| the Free Software Foundation, either version 3 of the License, or           |
| (at your option) any later version.                                         |
|                                                                             |
|                                                                             |
| MobileQuiz is distributed in the hope that it will be useful,               |
| but WITHOUT ANY WARRANTY; without even the implied warranty of              |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the                |
| GNU General Public License for more details.                                |
|                                                                             |
| You should have received a copy of the GNU General Public License           |
| along with MobileQuiz.  If not, see <http://www.gnu.org/licenses/>.         |
+-----------------------------------------------------------------------------+
*/

/*************************************
 *  Configuration for URL Shorter    *
 *************************************/

// Activate URL-Shortener
define("SHORTENER", false);

// Authentication Parameters
define("SHORTENER_USERNAME", "wordpressplugin");
define("SHORTENER_PASSWORD", "1gnqxzh2");

// the query parameters
// output format: 'json', 'xml' or 'simple'
define("SHORTENER_FORMAT", "simple"); 
// the URL of the API file
define("SHORTENER_URL", "http://tiny.uni-mannheim.de/yourls-api.php");


/****************************************************************
 *  Quiz Constanz - DO NOT TOUCH - unless you know what you do  *
 ****************************************************************/
define("QUESTION_TYPE_MULTI", "1");     // Multi Choice
define("QUESTION_TYPE_SINGLE", "2");    // Single Choice
define("QUESTION_TYPE_NUM", "3");       // Numeric
define("CHOICE_TYPE_INCORRECT", "0");   // Wrong Choice
define("CHOICE_TYPE_CORRECT", "1");     // Correct Choice
define("CHOICE_TYPE_NEUTRAL", "2");     // Neutral Choice
define("NUMERIC_MAX_NUMBER_OF_BUCKETS", "20"); // max number of Buckets displayed in Numeric Questions

define("ALLOWED_TAGS", "<br><br/><b><i><img><iframe>"); // Valid Tags for the question layout, which can be used by people.
?>
