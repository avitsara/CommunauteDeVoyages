<?php

namespace ContainerKjmTmoB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc90e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer221f8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties77308 = [
        
    ];

    public function getConnection()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getConnection', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getMetadataFactory', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getExpressionBuilder', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'beginTransaction', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getCache', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'transactional', array('func' => $func), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'commit', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->commit();
    }

    public function rollback()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'rollback', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getClassMetadata', array('className' => $className), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'createQuery', array('dql' => $dql), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'createNamedQuery', array('name' => $name), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'createQueryBuilder', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'flush', array('entity' => $entity), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'clear', array('entityName' => $entityName), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->clear($entityName);
    }

    public function close()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'close', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->close();
    }

    public function persist($entity)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'persist', array('entity' => $entity), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'remove', array('entity' => $entity), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'refresh', array('entity' => $entity), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'detach', array('entity' => $entity), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'merge', array('entity' => $entity), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'contains', array('entity' => $entity), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getEventManager', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getConfiguration', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'isOpen', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getUnitOfWork', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getProxyFactory', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'initializeObject', array('obj' => $obj), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'getFilters', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'isFiltersStateClean', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'hasFilters', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return $this->valueHoldercc90e->hasFilters();
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

        $instance->initializer221f8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercc90e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc90e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc90e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, '__get', ['name' => $name], $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        if (isset(self::$publicProperties77308[$name])) {
            return $this->valueHoldercc90e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc90e;

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

        $targetObject = $this->valueHoldercc90e;
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
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc90e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc90e;
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
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, '__isset', array('name' => $name), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc90e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc90e;
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
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, '__unset', array('name' => $name), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc90e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc90e;
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
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, '__clone', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        $this->valueHoldercc90e = clone $this->valueHoldercc90e;
    }

    public function __sleep()
    {
        $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, '__sleep', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;

        return array('valueHoldercc90e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer221f8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer221f8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer221f8 && ($this->initializer221f8->__invoke($valueHoldercc90e, $this, 'initializeProxy', array(), $this->initializer221f8) || 1) && $this->valueHoldercc90e = $valueHoldercc90e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc90e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc90e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
