<?php

namespace ContainerFoYRkWv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb133b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera82c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0d69c = [
        
    ];

    public function getConnection()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getConnection', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getMetadataFactory', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getExpressionBuilder', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'beginTransaction', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getCache', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getCache();
    }

    public function transactional($func)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'transactional', array('func' => $func), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'wrapInTransaction', array('func' => $func), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'commit', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->commit();
    }

    public function rollback()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'rollback', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getClassMetadata', array('className' => $className), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'createQuery', array('dql' => $dql), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'createNamedQuery', array('name' => $name), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'createQueryBuilder', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'flush', array('entity' => $entity), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'clear', array('entityName' => $entityName), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->clear($entityName);
    }

    public function close()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'close', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->close();
    }

    public function persist($entity)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'persist', array('entity' => $entity), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'remove', array('entity' => $entity), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'refresh', array('entity' => $entity), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'detach', array('entity' => $entity), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'merge', array('entity' => $entity), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getRepository', array('entityName' => $entityName), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'contains', array('entity' => $entity), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getEventManager', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getConfiguration', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'isOpen', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getUnitOfWork', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getProxyFactory', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'initializeObject', array('obj' => $obj), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'getFilters', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'isFiltersStateClean', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'hasFilters', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return $this->valueHolderb133b->hasFilters();
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

        $instance->initializera82c0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb133b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb133b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb133b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, '__get', ['name' => $name], $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        if (isset(self::$publicProperties0d69c[$name])) {
            return $this->valueHolderb133b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb133b;

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

        $targetObject = $this->valueHolderb133b;
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
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb133b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb133b;
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
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, '__isset', array('name' => $name), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb133b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb133b;
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
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, '__unset', array('name' => $name), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb133b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb133b;
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
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, '__clone', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        $this->valueHolderb133b = clone $this->valueHolderb133b;
    }

    public function __sleep()
    {
        $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, '__sleep', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;

        return array('valueHolderb133b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera82c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera82c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera82c0 && ($this->initializera82c0->__invoke($valueHolderb133b, $this, 'initializeProxy', array(), $this->initializera82c0) || 1) && $this->valueHolderb133b = $valueHolderb133b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb133b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb133b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
