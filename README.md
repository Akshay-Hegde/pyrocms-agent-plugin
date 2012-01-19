# USER AGENT PLUGIN
  
Plugin for PyroCMS. A complete reflection of the Codeigniter User Agent Class plus a few extra
methods for hiding and showing content on mobile devices.

* Version 1.0
* Compatible with PyroCMS v2.0.x
* [Author - Osvaldo Brignoni](http://obrignoni.com)
* [Issue Tracker](https://github.com/obrignoni/pyrocms-agent-plugin/issues)
* [PyroCMS Website](http://pyrocms.com/)
* [Codeigniter User Guide - User Agent Class](http://codeigniter.com/user_guide/libraries/user_agent.html)

___

# USAGE

## IS MOBILE HIDE
Hide content from mobile devices.

### Arguments
* __match__ (optional) - The module"s slug.

__Example__

    {{ agent:is_mobile_hide }}  
    
        You won't see this on mobile.
    
    {{ /agent:is_mobile_hide }}

___

## IS MOBILE SHOW
Show content on mobile devices only.

### Arguments
* __match__ (optional) - The module"s slug.

__Example__

    {{ agent:is_mobile_show }}
  
        This is only shown on mobile devices.
  
    {{ /agent:is_mobile_show }}

___

## IS BROWSER
Returns TRUE/FALSE (boolean) if the user agent is a known web browser.

### Arguments
* __match__ (optional) - The module"s slug.

__Example__

    {{ if { agent:is_browser match="Firefox" } }}
    
        Yes, this is Firefox.
        
    {{ else }}
    
        No, this is not Firefox.
    
    {{ endif }}

___

## BROWSER
Returns a string containing the name of the web browser viewing your site.

### Arguments
* __none__

__Example__

    {{ agent:browser }}

___

## VERSION
Returns a string containing the version number of the web browser viewing your site.

### Arguments
* __none__

    {{ agent:version }}

___

## IS MOBILE
Returns TRUE/FALSE (boolean) if the user agent is a known mobile device.

### Arguments
* __none__

__Example__

    {{ if { agent:is_mobile } }}
    
        Yes it is.
    
    {{ else }}

        No.
    
    {{ endif }}

___

## MOBILE
Returns a string containing the name of the mobile device viewing your site.

### Arguments
* __none__

__Example__

    {{ agent:mobile }}

___

## IS ROBOT
Returns TRUE/FALSE (boolean) if the user agent is a known robot.

### Arguments
* __none__

__Example__

    {{ if { agent:is_robot } }}
    
        Yes it is.
    
    {{ else }}

        No.
    
    {{ endif }}

___

## ROBOT
Returns a string containing the name of the robot viewing your site.

### Arguments
* __none__

__Example__

    {{ agent:robot }}

___

## PLATFORM
Returns a string containing the platform viewing your site (Linux, Windows, OS X, etc.).

### Arguments
* __none__

__Example__

    {{ agent:platform }}

___

## IS REFERRAL
Returns TRUE/FALSE (boolean) if the user agent was referred from another site.

### Arguments
* __none__

__Example__

    {{ if { agent:is_referral } }}
    
        Yes it is.
    
    {{ else }}

        No.
    
    {{ endif }}

___

## REFERRER
Returns a string of the referrer site.

### Arguments
* __none__

__Example__

    {{ agent:referrer }}

___

## FULL STRING
Returns a string containing the full user agent string.

### Arguments
* __none__

__Example__

    {{ agent:full_string }}
    
___

## ACCEPT LANGUAGE
Lets you determine if the user agent accepts a particular language.

### Arguments
* __match__ (optional) - The language code.

__Example__

    {{ agent:accept_language match="en" }}

___

## ACCEPT CHARSET
Lets you determine if the user agent accepts a particular character set.

### Arguments
* __match__ (optional) - The charset name.

__Example__

    {{ agent:accept_charset match="utf-8"}}