<?php
/*************************************************************************************
 * 4rpl.php
 * --------
 * Author: kajacx [Contact K75 for redacted email address]
 * Release Version: 1.0.1
 * Date Started: 2017/09/01
 *
 * 4RPL language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2017/09/01 (1.0.0)
 *  -  First Release
 * 2017/09/23 (1.0.1)
 *  -  Added numbers to variable and function names
 *
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => '4RPL',
    'COMMENT_SINGLE' => array(1 => '#'),
    //'COMMENT_MULTI' => array('/*' => '*/'),
    'QUOTEMARKS' => array("\""),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    //'NUMBERS' => '[0-9]+(\\.[0-9]+)?',
    'KEYWORDS' => array(
        1 => array( #flow control - dark green
            'do','if','once','while','else','endif','endonce','endwhile','loop'
        ),
        2 => array( #stack manimulation - brown
            'break','concat','do','dup','dup2','pop','repeat','return','swap'
        ),
        3 => array( #math - red
            'abs','acos','add','and','asfloat','asin','asint','atan','atan2','ceil','cos','div','eq','eq0','floor',
            'gt','gte','lt','lte','ln','log','log10','max','min','mod','mul','neg','neq','neq0','not','or','pow','sin','sqrt',
            'sub','tan','xor'
        ),
        4 => array( #constans and iteration variables
            'I','J','K','E','PI','TWOPI','TRUE','FALSE'
        )
    ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', ':'
    ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #006000;', #flow control - dark green
            2 => 'color: #804000; font-weight: normal;', #stack manimulation - brown
            3 => 'color: #ff0000;', #math - red
            4 => 'color: #004080;'  #constans and iteration variables
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000c0;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000c0;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #800000;',
            ),
        'REGEXPS' => array(
            0 => 'color: #0080ff;', //Variables - local
            1 => 'color: #8000ff;',  //Variables - global
            2 => 'color: #004040; font-weight: bold;', //Script variables
            3 => 'color: #800040; background-color: #ffff80; text-decoration: underline;', #method definition
            4 => 'color: #800080;', #method usage
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => ''
    ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => "(&lt;\\-|\\-\\&gt;|\\-\\-|\\-\\?)(\\!|[0-9a-zA-Z_]+)", //Variables - local
        1 => "(&lt;\\-|\\-\\&gt;|\\-\\-|\\-\\?)(\\!\\*|\\*[0-9a-zA-Z_]+)", //Variables - global
        2 => "\\$[0-9a-zA-Z_]+", //Script variables
        3 => ":[0-9a-zA-Z_]+", #method definition
        4 => "@[0-9a-zA-Z_]+", #method usage
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);
