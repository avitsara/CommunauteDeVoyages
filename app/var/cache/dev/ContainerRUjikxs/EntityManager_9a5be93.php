<?php

namespace ContainerRUjikxs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera6588 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc5586 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4603f = [
        
    ];

    public function getConnection()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getConnection', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getMetadataFactory', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getExpressionBuilder', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'beginTransaction', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getCache', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'transactional', array('func' => $func), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'commit', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->commit();
    }

    public function rollback()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'rollback', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getClassMetadata', array('className' => $className), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'createQuery', array('dql' => $dql), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'createNamedQuery', array('name' => $name), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'createQueryBuilder', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'flush', array('entity' => $entity), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'clear', array('entityName' => $entityName), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->clear($entityName);
    }

    public function close()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'close', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->close();
    }

    public function persist($entity)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'persist', array('entity' => $entity), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'remove', array('entity' => $entity), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'refresh', array('entity' => $entity), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'detach', array('entity' => $entity), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'merge', array('entity' => $entity), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'contains', array('entity' => $entity), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getEventManager', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getConfiguration', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'isOpen', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getUnitOfWork', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getProxyFactory', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'initializeObject', array('obj' => $obj), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'getFilters', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'isFiltersStateClean', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'hasFilters', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return $this->valueHoldera6588->hasFilters();
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

        $instance->initializerc5586 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera6588) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera6588 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera6588->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, '__get', ['name' => $name], $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        if (isset(self::$publicProperties4603f[$name])) {
            return $this->valueHoldera6588->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6588;

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

        $targetObject = $this->valueHoldera6588;
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
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6588;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera6588;
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
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, '__isset', array('name' => $name), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6588;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera6588;
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
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, '__unset', array('name' => $name), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6588;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera6588;
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
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, '__clone', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        $this->valueHoldera6588 = clone $this->valueHoldera6588;
    }

    public function __sleep()
    {
        $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, '__sleep', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;

        return array('valueHoldera6588');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc5586 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc5586;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc5586 && ($this->initializerc5586->__invoke($valueHoldera6588, $this, 'initializeProxy', array(), $this->initializerc5586) || 1) && $this->valueHoldera6588 = $valueHoldera6588;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera6588;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera6588;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
