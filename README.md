# User Agent Plugin
  
Plugin for PyroCMS. A complete reflection of the Codeigniter User Agent Class plus a few extra
methods for hiding and showing on mobile devices.

* Version 1.0
* Compatible with PyroCMS v2.0.x
* [Issues](https://github.com/obrignoni/pyro-agent-plugin/issues)
* [PyroCMS Website](http://pyrocms.com/)
* [Codeigniter User Guide - User Agent Class](http://codeigniter.com/user_guide/libraries/user_agent.html)

## Examples with Lex tags

### Is mobile hide

    {{ agent:is_mobile_hide }}  
    
      "You won't see this on mobile."
    
    {{ /agent:is_mobile_hide }}

### Is mobile show

    {{ agent:is_mobile_show }}
  
      "This is only shown on mobile devices."
  
    {{ /agent:is_mobile_show }}
  
### Is Browser Firefox

    {{ agent:is_browser match="Firefox" }}

### Browser

    {{ agent:browser }}

### Version

    {{ agent:version }}

### Is mobile

    {{ agent:is_mobile }}

### Mobile

    {{ agent:mobile }}

### Is robot

    {{ agent:is_robot }}

### Robot

    {{ agent:robot }}

### Platform

    {{ agent:platform }}

### Is referral

    {{ agent:is_referral }}

### Referrer

    {{ agent:referrer }}

### Full string

    {{ agent:full_string }}

### Accept language

    {{ agent:accept_language match="en" }}

### Accept charset

    {{ agent:accept_charset match="utf-8"}}