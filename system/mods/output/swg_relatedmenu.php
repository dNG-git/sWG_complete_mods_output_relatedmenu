<?php
//j// BOF

/*n// NOTE
----------------------------------------------------------------------------
secured WebGine
net-based application engine
----------------------------------------------------------------------------
(C) direct Netware Group - All rights reserved
http://www.direct-netware.de/redirect.php?swg

The following license agreement remains valid unless any additions or
changes are being made by direct Netware Group in a written form.

This program is free software; you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the
Free Software Foundation; either version 2 of the License, or (at your
option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
more details.

You should have received a copy of the GNU General Public License along with
this program; if not, write to the Free Software Foundation, Inc.,
59 Temple Place, Suite 330, Boston, MA 02111-1307, USA.
----------------------------------------------------------------------------
http://www.direct-netware.de/redirect.php?licenses;gpl
----------------------------------------------------------------------------
$Id$
#echo(sWGmodsOutputRelatedmenuVersion)#
sWG/#echo(__FILEPATH__)#
----------------------------------------------------------------------------
NOTE_END //n*/
/**
* Creates various menu entries based on related definitions or FormTag calls.
*
* @internal   We are using phpDocumentor to automate the documentation process
*             for creating the Developer's Manual. All sections including
*             these special comments will be removed from the release source
*             code.
*             Use the following line to ensure 76 character sizes:
* ----------------------------------------------------------------------------
* @author     direct Netware Group
* @copyright  (C) direct Netware Group - All rights reserved
* @package    sWG
* @subpackage mods_output_pagemenu
* @uses       direct_product_iversion
* @since      v0.1.00
* @license    http://www.direct-netware.de/redirect.php?licenses;gpl
*             GNU General Public License 2
*/

/* -------------------------------------------------------------------------
All comments will be removed in the "production" packages (they will be in
all development packets)
------------------------------------------------------------------------- */

//j// Functions and classes

//f// direct_mods_related_output_relatedmenu_formtags_mainmenu ($f_rid,$f_data)
/**
* Parses the given FormTag related definition and adds the result to the
* "mainmenu" area.
*
* @param  string $f_rid Related definition ID
* @param  string $f_data XML menu data
* @uses   direct_debug()
* @uses   direct_mods_related_output_relatedmenu()
* @uses   USE_debug_reporting
* @return boolean True on success
* @since  v0.1.00
*/
function direct_mods_related_output_relatedmenu_formtags_mainmenu ($f_rid,$f_data)
{
	global $direct_cachedata;
	if (USE_debug_reporting) { direct_debug (8,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu_formtags_mainmenu ($f_rid,+f_data)- (#echo(__LINE__)#)"); }

	if (direct_mods_related_output_relatedmenu ("mainmenu",$f_data,false))
	{
		$direct_cachedata['formtags_related_data'] = "";
		return true;
	}
	else { return false; }
}

//f// direct_mods_related_output_relatedmenu_formtags_pagemenu ($f_rid,$f_data)
/**
* Parses the given FormTag related definition and adds the result to the
* "pagemenu" area.
*
* @param  string $f_rid Related definition ID
* @param  string $f_data XML menu data
* @uses   direct_debug()
* @uses   direct_mods_related_output_relatedmenu()
* @uses   USE_debug_reporting
* @return boolean True on success
* @since  v0.1.00
*/
function direct_mods_related_output_relatedmenu_formtags_pagemenu ($f_rid,$f_data)
{
	global $direct_cachedata;
	if (USE_debug_reporting) { direct_debug (8,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu_formtags_pagemenu ($f_rid,+f_data)- (#echo(__LINE__)#)"); }

	if (direct_mods_related_output_relatedmenu ("pagemenu",$f_data,false))
	{
		$direct_cachedata['formtags_related_data'] = "";
		return true;
	}
	else { return false; }
}

//f// direct_mods_related_output_relatedmenu_formtags_servicemenu ($f_rid,$f_data)
/**
* Parses the given FormTag related definition and adds the result to the
* "servicemenu" area.
*
* @param  string $f_rid Related definition ID
* @param  string $f_data XML menu data
* @uses   direct_debug()
* @uses   direct_mods_related_output_relatedmenu()
* @uses   USE_debug_reporting
* @return boolean True on success
* @since  v0.1.00
*/
function direct_mods_related_output_relatedmenu_formtags_servicemenu ($f_rid,$f_data)
{
	global $direct_cachedata;
	if (USE_debug_reporting) { direct_debug (8,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu_formtags_servicemenu ($f_rid,+f_data)- (#echo(__LINE__)#)"); }

	if (direct_mods_related_output_relatedmenu ("servicemenu",$f_data,false))
	{
		$direct_cachedata['formtags_related_data'] = "";
		return true;
	}
	else { return false; }
}

//f// direct_mods_related_output_relatedmenu_mainmenu ($f_rid,$f_data)
/**
* Parses the given related definition and adds the result to the "mainmenu"
* area.
*
* @param  string $f_rid Related definition ID
* @param  string $f_data XML menu data
* @uses   direct_debug()
* @uses   direct_mods_related_output_relatedmenu()
* @uses   USE_debug_reporting
* @return boolean True on success
* @since  v0.1.00
*/
function direct_mods_related_output_relatedmenu_mainmenu ($f_rid,$f_data)
{
	if (USE_debug_reporting) { direct_debug (8,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu_mainmenu ($f_rid,+f_data)- (#echo(__LINE__)#)"); }
	return direct_mods_related_output_relatedmenu ("mainmenu",$f_data);
}

//f// direct_mods_related_output_relatedmenu_pagemenu ($f_rid,$f_data)
/**
* Parses the given related definition and adds the result to the "pagemenu"
* area.
*
* @param  string $f_rid Related definition ID
* @param  string $f_data XML menu data
* @uses   direct_debug()
* @uses   direct_mods_related_output_relatedmenu()
* @uses   USE_debug_reporting
* @return boolean True on success
* @since  v0.1.00
*/
function direct_mods_related_output_relatedmenu_pagemenu ($f_rid,$f_data)
{
	if (USE_debug_reporting) { direct_debug (8,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu_pagemenu ($f_rid,+f_data)- (#echo(__LINE__)#)"); }
	return direct_mods_related_output_relatedmenu ("pagemenu",$f_data);
}

//f// direct_mods_related_output_relatedmenu ($f_menu,$f_data)
/**
* Parses the given XML menu definition and adds the result to the specified
* area.
*
* @param  string $f_menu Menu name
* @param  string $f_data XML menu data
* @uses   direct_debug()
* @uses   direct_evars_get()
* @uses   USE_debug_reporting
* @return boolean True on success
* @since  v0.1.00
*/
function direct_mods_related_output_relatedmenu ($f_menu,$f_data)
{
	global $direct_classes,$direct_settings;
	if (USE_debug_reporting) { direct_debug (5,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu ($f_menu,+f_data)- (#echo(__LINE__)#)"); }

	if ((is_string ($f_menu))&&(!empty ($f_menu))&&(is_string ($f_data))&&(!empty ($f_data)))
	{
		$f_return = true;
		$f_menu_array = direct_evars_get ($f_data);

		if (is_array ($f_menu_array))
		{
			foreach ($f_menu_array as $f_entry_array)
			{
				if ($f_entry_array['active'])
				{
					$f_active_check = true;

					if ($f_entry_array['lang'])
					{
						if (is_array ($f_entry_array['lang']))
						{
							if (!in_array ($direct_settings['lang'],$f_entry_array['lang'])) { $f_active_check = false; }
						}
						elseif ($f_entry_array['lang'] != $direct_settings['lang']) { $f_active_check = false; }
					}

					if (!$f_entry_array['title']) { $f_active_check = false; }
					if (!$f_entry_array['link']) { $f_active_check = false; }

					$f_rights_check = false;

					if ($f_entry_array['guests'])
					{
						if (($f_entry_array['guests'])&&(($direct_settings['user']['type'] == "ex")||($direct_settings['user']['type'] == "gt"))) { $f_rights_check = true; }
					}

					if ($f_entry_array['members'])
					{
						if (($f_entry_array['members'])&&(direct_class_function_check ($direct_classes['kernel'],"dvirtual_usertype_get_int")))
						{
							if ($direct_classes['kernel']->dvirtual_usertype_get_int ($direct_settings['user']['type'])) { $f_rights_check = true; }
						}
					}

					if ((!$f_rights_check)&&($f_entry_array['group_right']))
					{
						if ((direct_class_function_check ($direct_classes['kernel'],"dvirtual_group_user_check_right"))&&(isset ($f_entry_array['group_right']))) { $f_rights_check = $direct_classes['kernel']->dvirtual_group_user_check_right ($f_entry_array['group_right']); }
					}

					if (($f_active_check)&&($f_rights_check))
					{
						if ($f_entry_array['level']) { $direct_classes['output']->options_insert ($f_entry_array['level'],$f_menu,$f_entry_array['link'],$f_entry_array['title'],$f_entry_array['image'],$f_entry_array['link_type']); }
						else { $direct_classes['output']->options_insert (6,$f_menu,$f_entry_array['link'],$f_entry_array['title'],$f_entry_array['image'],$f_entry_array['link_type']); }
					}
				}
			}
		}
	}
	else { $f_return = false; }

	return /*#ifdef(DEBUG):direct_debug (7,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu ()- (#echo(__LINE__)#)",:#*/$f_return/*#ifdef(DEBUG):,true):#*/;
}

//f// direct_mods_related_output_relatedmenu_servicemenu ($f_rid,$f_data)
/**
* Parses the given related definition and adds the result to the
* "servicemenu" area.
*
* @param  string $f_rid Related definition ID
* @param  string $f_data XML menu data
* @uses   direct_debug()
* @uses   direct_mods_related_output_relatedmenu()
* @uses   USE_debug_reporting
* @return boolean True on success
* @since  v0.1.00
*/
function direct_mods_related_output_relatedmenu_servicemenu ($f_rid,$f_data)
{
	if (USE_debug_reporting) { direct_debug (8,"sWG/#echo(__FILEPATH__)# -direct_mods_related_output_relatedmenu_servicemenu ($f_rid,+f_data)- (#echo(__LINE__)#)"); }
	return direct_mods_related_output_relatedmenu ("servicemenu",$f_data);
}

//j// EOF
?>