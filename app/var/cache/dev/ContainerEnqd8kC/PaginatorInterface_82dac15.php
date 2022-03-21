<?php

namespace ContainerEnqd8kC;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5193c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb9812 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties763db = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        if ($this->valueHolder5193c === $returnValue = $this->valueHolder5193c->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerb9812 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5193c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder5193c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, '__get', ['name' => $name], $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        if (isset(self::$publicProperties763db[$name])) {
            return $this->valueHolder5193c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5193c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5193c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5193c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5193c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, '__isset', array('name' => $name), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5193c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5193c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, '__unset', array('name' => $name), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5193c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5193c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, '__clone', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        $this->valueHolder5193c = clone $this->valueHolder5193c;
    }

    public function __sleep()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, '__sleep', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return array('valueHolder5193c');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb9812 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb9812;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'initializeProxy', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5193c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5193c;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
