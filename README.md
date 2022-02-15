# oxid-settings-manager
Allows adding generic settings that can be used in the installation

## Installation

Install via composer `composer require aggrosoft/oxid-settings-manager` and activate in backend

## Usage

Define additional settings in Modules Settings screen, to e.g. add a new Bool Variable add 
as following to "Bool Variables" Setting:
```
agmyboolvalue => My Bool Value
agmyotherboolvalue => My other bool Value
```
**Attention: Always prefix your variables, they will be written to the global scope and might 
override core settings!**

All defined variables can now be used in admin backend at "Master Settings" => "Core Settings" => "Settings" => "Custom Settings"