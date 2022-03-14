<?php

namespace ContainerBUekyF9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbecd7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer14628 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88765 = [
        
    ];

    public function getConnection()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getConnection', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getMetadataFactory', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getExpressionBuilder', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'beginTransaction', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getCache', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'transactional', array('func' => $func), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'commit', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->commit();
    }

    public function rollback()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'rollback', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getClassMetadata', array('className' => $className), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'createQuery', array('dql' => $dql), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'createNamedQuery', array('name' => $name), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'createQueryBuilder', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'flush', array('entity' => $entity), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'clear', array('entityName' => $entityName), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->clear($entityName);
    }

    public function close()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'close', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->close();
    }

    public function persist($entity)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'persist', array('entity' => $entity), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'remove', array('entity' => $entity), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'refresh', array('entity' => $entity), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'detach', array('entity' => $entity), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'merge', array('entity' => $entity), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'contains', array('entity' => $entity), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getEventManager', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getConfiguration', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'isOpen', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getUnitOfWork', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getProxyFactory', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'initializeObject', array('obj' => $obj), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'getFilters', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'isFiltersStateClean', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'hasFilters', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return $this->valueHolderbecd7->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer14628 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbecd7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbecd7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbecd7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, '__get', ['name' => $name], $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        if (isset(self::$publicProperties88765[$name])) {
            return $this->valueHolderbecd7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbecd7;

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

        $targetObject = $this->valueHolderbecd7;
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
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbecd7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbecd7;
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
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, '__isset', array('name' => $name), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbecd7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbecd7;
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
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, '__unset', array('name' => $name), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbecd7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbecd7;
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
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, '__clone', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        $this->valueHolderbecd7 = clone $this->valueHolderbecd7;
    }

    public function __sleep()
    {
        $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, '__sleep', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;

        return array('valueHolderbecd7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer14628 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer14628;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer14628 && ($this->initializer14628->__invoke($valueHolderbecd7, $this, 'initializeProxy', array(), $this->initializer14628) || 1) && $this->valueHolderbecd7 = $valueHolderbecd7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbecd7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbecd7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
