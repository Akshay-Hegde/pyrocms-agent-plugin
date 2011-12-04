<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* User Agent Plugin
*
* A complete reflection of the Codeigniter User Agent Class plus a few extra
* methods for hiding and showing on mobile devices.
*
* @author Osvaldo Brignoni <obrignoni@gmail.com>
* @copyright Copyright (c) 2011 Osvaldo Brignoni
* @license MIT License
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in
* all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
* THE SOFTWARE.
*/

class Plugin_Agent extends Plugin
{

    /**
   	 * Hide content from mobile devices.
   	 *
   	 * Usage:
   	 * { pyro:agent:is_mobile_hide }
     *  "You won't see this on mobile."
     * { pyro::is_mobile_hide }
     *
     * @match   string (optional)
   	 * @return	array
   	 */
   	function is_mobile_hide()
   	{
        if($this->agent->is_mobile($this->attribute('match'))) {
            return '';
        }
        return $this->content() ? $this->content() : TRUE;
   	}

    /**
   	 * Only show content on mobile devices.
   	 *
   	 * Usage:
   	 * { pyro:agent:is_mobile_show }
     *  "This is only shown on mobile devices."
     * { pyro::is_mobile_show }
     *
   	 * @match   string (optional)
   	 * @return	array
   	 */
    function is_mobile_show()
   	{
        if($this->agent->is_mobile($this->attribute('match'))) {
            return $this->content() ? $this->content() : TRUE;
        }
        return '';
   	}

    /**
   	 * Returns TRUE/FALSE (boolean) if the user agent is a known web browser.
   	 *
   	 * Usage:
     * { pyro:agent:is_browser }
     *
     * or
     *
     * { pyro:agent:is_browser match="Firefox" }
     *
     * @match   string (optional)
   	 * @return	boolean
   	 */
   	function is_browser()
   	{
        if($this->agent->is_browser($this->attribute('match'))){
           return 'true';
        }
        return 'false';
   	}

    /**
   	 * Returns a string containing the name of the web browser viewing your site.
   	 *
   	 * Usage:
   	 * { pyro:agent:browser }
   	 *
     * @param   none
   	 * @return	string
   	 */
   	function browser()
   	{
           return $this->agent->browser();
   	}

    /**
   	 * Returns a string containing the version number of the web browser viewing your site.
   	 *
   	 * Usage:
   	 * { pyro:agent:version }
   	 *
     * @param   none
   	 * @return	string
   	 */
   	function version()
   	{
           return $this->agent->version();
   	}

    /**
   	 * Returns TRUE/FALSE (boolean) if the user agent is a known mobile device.
   	 *
   	 * Usage:
     * { pyro:agent:is_mobile }
     *
     * or
     *
     * { pyro:agent:is_mobile match="iphone" }
     *
     * @match   string (optional)
   	 * @return	boolean
   	 */
   	function is_mobile()
   	{
        if($this->agent->is_mobile($this->attribute('match'))){
            return 'true';
        }
        return 'false';
   	}

    /**
   	 * Returns a string containing the name of the mobile device viewing your site.
   	 *
   	 * Usage:
   	 * { pyro:agent:mobile }
   	 *
     * @param   none
   	 * @return	string
   	 */
   	function mobile()
   	{
        if(!$this->agent->is_mobile($this->attribute('match'))){
           return 'false';
        }
        return $this->agent->mobile();
   	}

    /**
   	 * Returns a string containing the platform viewing your site (Linux, Windows, OS X, etc.).
   	 *
   	 * Usage:
   	 * { pyro:agent:platform }
   	 *
     * @param   none
   	 * @return	string
   	 */
   	function platform()
   	{
   		return $this->agent->platform();
   	}

    /**
   	 * Returns TRUE/FALSE (boolean) if the user agent was referred from another site.
   	 *
   	 * Usage:
   	 * { pyro:agent:is_referral }
   	 *
     * @param   none
   	 * @return	boolean
   	 */
   	function is_referral()
   	{
        if($this->agent->is_referral()){
          return 'true';
        }
        return 'false';
   	}

    /**
   	 * Returns a string of the referrer site.
   	 *
   	 * Usage:
   	 * { pyro:agent:referrer }
   	 *
     * @param   none
   	 * @return	string
   	 */
   	function referrer()
   	{
       if ($this->agent->is_referral())
       {
           return $this->agent->referrer();
       }
   	}

    /**
   	 * Returns a string containing the full user agent string.
   	 *
   	 * Usage:
   	 * { pyro:agent:full_string }
   	 *
     * @param   none
   	 * @return	string
   	 */
   	function full_string()
   	{
        return $this->agent->agent_string();
   	}

    /**
   	 * Returns TRUE/FALSE (boolean) if the user agent is a known robot.
   	 *
   	 * Usage:
   	 * { pyro:agent:is_robot }
     *
     * @param   none
   	 * @return	boolean
   	 */
   	function is_robot()
   	{
        if($this->agent->is_robot()){
           return 'true';
        }
        return 'false';
   	}

	/**
	 * Returns a string containing the name of the robot viewing your site.
	 *
	 * Usage:
	 * { pyro:agent:robot }
	 *
     * @param   none
   	 * @return	string
	 */
	function robot()
	{
        if(!$this->agent->is_robot()){
           return 'false';
        }
		return $this->agent->robot();
	}

    /**
   	 * Lets you determine if the user agent accepts a particular language.
   	 *
   	 * Usage:
   	 * { pyro:agent:accept_language match="en" }
   	 *
     * @match   string (optional)
   	 * @return	boolean
   	 */
   	function accept_language()
   	{
        if($this->agent->accept_lang($this->attribute('match'))){
        return 'true';
        }
        return 'false';
   	}

    /**
   	 * Lets you determine if the user agent accepts a particular character set.
   	 *
   	 * Usage:
   	 * { pyro:agent:accept_charset match="utf-8"}
   	 *
     * @match   string (optional)
   	 * @return	boolean
   	 */
   	function accept_charset()
   	{
        if($this->agent->accept_charset($this->attribute('match'))){
         return 'true';
        }
        return 'false';
   	}

}
/* End of file agent.php */