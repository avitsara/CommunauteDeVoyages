<?php

namespace ContainerUmcuBiH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder63e5d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7b8e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d18d = [
        
    ];

    public function getConnection()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getConnection', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getMetadataFactory', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getExpressionBuilder', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'beginTransaction', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getCache', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'transactional', array('func' => $func), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'commit', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->commit();
    }

    public function rollback()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'rollback', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getClassMetadata', array('className' => $className), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'createQuery', array('dql' => $dql), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'createNamedQuery', array('name' => $name), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'createQueryBuilder', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'flush', array('entity' => $entity), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'clear', array('entityName' => $entityName), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->clear($entityName);
    }

    public function close()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'close', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->close();
    }

    public function persist($entity)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'persist', array('entity' => $entity), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'remove', array('entity' => $entity), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'refresh', array('entity' => $entity), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'detach', array('entity' => $entity), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'merge', array('entity' => $entity), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'contains', array('entity' => $entity), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getEventManager', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getConfiguration', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'isOpen', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getUnitOfWork', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getProxyFactory', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'initializeObject', array('obj' => $obj), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'getFilters', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'isFiltersStateClean', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'hasFilters', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return $this->valueHolder63e5d->hasFilters();
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

        $instance->initializer7b8e2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder63e5d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder63e5d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder63e5d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, '__get', ['name' => $name], $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        if (isset(self::$publicProperties8d18d[$name])) {
            return $this->valueHolder63e5d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63e5d;

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

        $targetObject = $this->valueHolder63e5d;
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
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63e5d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder63e5d;
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
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, '__isset', array('name' => $name), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63e5d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder63e5d;
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
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, '__unset', array('name' => $name), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63e5d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder63e5d;
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
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, '__clone', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        $this->valueHolder63e5d = clone $this->valueHolder63e5d;
    }

    public function __sleep()
    {
        $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, '__sleep', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;

        return array('valueHolder63e5d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7b8e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7b8e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7b8e2 && ($this->initializer7b8e2->__invoke($valueHolder63e5d, $this, 'initializeProxy', array(), $this->initializer7b8e2) || 1) && $this->valueHolder63e5d = $valueHolder63e5d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder63e5d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder63e5d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
