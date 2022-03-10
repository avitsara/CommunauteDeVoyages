<?php

namespace Container9FygVC7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder10422 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7d00b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa964a = [
        
    ];

    public function getConnection()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getConnection', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getMetadataFactory', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getExpressionBuilder', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'beginTransaction', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getCache', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'transactional', array('func' => $func), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'commit', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->commit();
    }

    public function rollback()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'rollback', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getClassMetadata', array('className' => $className), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'createQuery', array('dql' => $dql), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'createNamedQuery', array('name' => $name), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'createQueryBuilder', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'flush', array('entity' => $entity), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'clear', array('entityName' => $entityName), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->clear($entityName);
    }

    public function close()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'close', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->close();
    }

    public function persist($entity)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'persist', array('entity' => $entity), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'remove', array('entity' => $entity), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'refresh', array('entity' => $entity), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'detach', array('entity' => $entity), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'merge', array('entity' => $entity), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'contains', array('entity' => $entity), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getEventManager', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getConfiguration', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'isOpen', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getUnitOfWork', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getProxyFactory', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'initializeObject', array('obj' => $obj), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'getFilters', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'isFiltersStateClean', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'hasFilters', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return $this->valueHolder10422->hasFilters();
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

        $instance->initializer7d00b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder10422) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder10422 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder10422->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, '__get', ['name' => $name], $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        if (isset(self::$publicPropertiesa964a[$name])) {
            return $this->valueHolder10422->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10422;

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

        $targetObject = $this->valueHolder10422;
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
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10422;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder10422;
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
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, '__isset', array('name' => $name), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10422;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder10422;
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
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, '__unset', array('name' => $name), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10422;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder10422;
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
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, '__clone', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        $this->valueHolder10422 = clone $this->valueHolder10422;
    }

    public function __sleep()
    {
        $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, '__sleep', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;

        return array('valueHolder10422');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7d00b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7d00b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7d00b && ($this->initializer7d00b->__invoke($valueHolder10422, $this, 'initializeProxy', array(), $this->initializer7d00b) || 1) && $this->valueHolder10422 = $valueHolder10422;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder10422;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder10422;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
