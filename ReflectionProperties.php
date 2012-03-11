<?php

use \ReflectionClass;
use \ReflectionProperty;

trait ReflectionProperties {
    public function getProperties() {
        $reflect = new ReflectionClass($this);
        $props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

        $properties = []; 
        foreach ($props as $prop) {
            $properties[] = $prop->getName();
        }

        return $properties;
    }

    public function __toString()
    {
        $properties = $this->getProperties();
        $message = '';
        foreach ($properties as $property) {
            $message .= $property.' = "'. $this->$property. "\";\n";
        }

        return $message;
    }
}

