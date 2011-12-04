# User Agent Plugin
  
Plugin for PyroCMS. A complete reflection of the Codeigniter User Agent Class plus a few extra
methods for hiding and showing content on mobile devices.

* Version 1.0
* Compatible with PyroCMS v1.3.x
* [Issue Tracker](https://github.com/obrignoni/pyrocms-agent-plugin/issues)
* [PyroCMS Website](http://pyrocms.com/)
* [Codeigniter User Guide - User Agent Class](http://codeigniter.com/user_guide/libraries/user_agent.html)

## Examples with Lex tags

### Is mobile hide

    { pyro:agent:is_mobile_hide }  
    
      "You won't see this on mobile."
    
    { /pyro:agent:is_mobile_hide }

### Is mobile show

    { pyro:agent:is_mobile_show }
  
      "This is only shown on mobile devices."
  
    { /pyro:agent:is_mobile_show }
  
### Is Browser Firefox

    { pyro:agent:is_browser match="Firefox" }

### Browser

    { pyro:agent:browser }

### Version

    { pyro:agent:version }

### Is mobile

    { pyro:agent:is_mobile }

### Mobile

    { pyro:agent:mobile }

### Is robot

    { pyro:agent:is_robot }

### Robot

    { pyro:agent:robot }

### Platform

    { pyro:agent:platform }

### Is referral

    { pyro:agent:is_referral }

### Referrer

    { pyro:agent:referrer }

### Full string

    { pyro:agent:full_string }

### Accept language

    { pyro:agent:accept_language match="en" }

### Accept charset

    { pyro:agent:accept_charset match="utf-8"}