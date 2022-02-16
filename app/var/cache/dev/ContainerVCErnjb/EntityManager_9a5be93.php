<?php

namespace ContainerVCErnjb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder22272 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer50b72 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesee0fd = [
        
    ];

    public function getConnection()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getConnection', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getMetadataFactory', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getExpressionBuilder', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'beginTransaction', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getCache', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getCache();
    }

    public function transactional($func)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'transactional', array('func' => $func), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'wrapInTransaction', array('func' => $func), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'commit', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->commit();
    }

    public function rollback()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'rollback', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getClassMetadata', array('className' => $className), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'createQuery', array('dql' => $dql), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'createNamedQuery', array('name' => $name), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'createQueryBuilder', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'flush', array('entity' => $entity), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'clear', array('entityName' => $entityName), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->clear($entityName);
    }

    public function close()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'close', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->close();
    }

    public function persist($entity)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'persist', array('entity' => $entity), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'remove', array('entity' => $entity), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'refresh', array('entity' => $entity), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'detach', array('entity' => $entity), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'merge', array('entity' => $entity), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getRepository', array('entityName' => $entityName), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'contains', array('entity' => $entity), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getEventManager', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getConfiguration', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'isOpen', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getUnitOfWork', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getProxyFactory', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'initializeObject', array('obj' => $obj), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'getFilters', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'isFiltersStateClean', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'hasFilters', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return $this->valueHolder22272->hasFilters();
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

        $instance->initializer50b72 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder22272) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder22272 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder22272->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, '__get', ['name' => $name], $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        if (isset(self::$publicPropertiesee0fd[$name])) {
            return $this->valueHolder22272->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22272;

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

        $targetObject = $this->valueHolder22272;
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
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22272;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder22272;
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
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, '__isset', array('name' => $name), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22272;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder22272;
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
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, '__unset', array('name' => $name), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22272;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder22272;
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
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, '__clone', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        $this->valueHolder22272 = clone $this->valueHolder22272;
    }

    public function __sleep()
    {
        $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, '__sleep', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;

        return array('valueHolder22272');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer50b72 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer50b72;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer50b72 && ($this->initializer50b72->__invoke($valueHolder22272, $this, 'initializeProxy', array(), $this->initializer50b72) || 1) && $this->valueHolder22272 = $valueHolder22272;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder22272;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder22272;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
