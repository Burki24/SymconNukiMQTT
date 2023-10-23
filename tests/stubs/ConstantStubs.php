<?php

declare(strict_types=1);

/* EventConditionComparison */
define('EVENTCONDITIONCOMPARISON_EQUAL', 0);
define('EVENTCONDITIONCOMPARISON_NOTEQUAL', 1);
define('EVENTCONDITIONCOMPARISON_GREATER', 2);
define('EVENTCONDITIONCOMPARISON_GREATEROREQUAL', 3);
define('EVENTCONDITIONCOMPARISON_SMALLER', 4);
define('EVENTCONDITIONCOMPARISON_SMALLEROREQUAL', 5);

/* EventCyclicDateType */
define('EVENTCYCLICDATETYPE_NONE', 0);
define('EVENTCYCLICDATETYPE_ONCE', 1);
define('EVENTCYCLICDATETYPE_DAY', 2);
define('EVENTCYCLICDATETYPE_WEEK', 3);
define('EVENTCYCLICDATETYPE_MONTH', 4);
define('EVENTCYCLICDATETYPE_YEAR', 5);

/* EventCyclicTimeType */
define('EVENTCYCLICTIMETYPE_ONCE', 0);
define('EVENTCYCLICTIMETYPE_SECOND', 1);
define('EVENTCYCLICTIMETYPE_MINUTE', 2);
define('EVENTCYCLICTIMETYPE_HOUR', 3);

/* EventTriggerType */
define('EVENTTRIGGERTYPE_ONUPDATE', 0);
define('EVENTTRIGGERTYPE_ONCHANGE', 1);
define('EVENTTRIGGERTYPE_ONLIMITEXCEED', 2);
define('EVENTTRIGGERTYPE_ONLIMITDROP', 3);
define('EVENTTRIGGERTYPE_ONVALUE', 4);

/* EventType */
define('EVENTTYPE_TRIGGER', 0);
define('EVENTTYPE_CYCLIC', 1);
define('EVENTTYPE_SCHEDULE', 2);

/* MediaType */
define('MEDIATYPE_DASHBOARD', 0);
define('MEDIATYPE_IMAGE', 1);
define('MEDIATYPE_SOUND', 2);
define('MEDIATYPE_STREAM', 3);
define('MEDIATYPE_CHART', 4);
define('MEDIATYPE_DOCUMENT', 5);

/* ModuleType */
define('MODULETYPE_CORE', 0);
define('MODULETYPE_IO', 1);
define('MODULETYPE_SPLITTER', 2);
define('MODULETYPE_DEVICE', 3);
define('MODULETYPE_CONFIGURATOR', 4);
define('MODULETYPE_DISCOVERY', 5);

/* ObjectType */
define('OBJECTTYPE_CATEGORY', 0);
define('OBJECTTYPE_INSTANCE', 1);
define('OBJECTTYPE_VARIABLE', 2);
define('OBJECTTYPE_SCRIPT', 3);
define('OBJECTTYPE_EVENT', 4);
define('OBJECTTYPE_MEDIA', 5);
define('OBJECTTYPE_LINK', 6);

/* ScriptType */
define('SCRIPTTYPE_PHP', 0);

/* VariableType */
define('VARIABLETYPE_BOOLEAN', 0);
define('VARIABLETYPE_INTEGER', 1);
define('VARIABLETYPE_FLOAT', 2);
define('VARIABLETYPE_STRING', 3);