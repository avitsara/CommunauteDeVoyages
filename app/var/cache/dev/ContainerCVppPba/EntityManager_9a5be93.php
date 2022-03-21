<?php

namespace ContainerCVppPba;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getConnection', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getMetadataFactory', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getExpressionBuilder', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'beginTransaction', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getCache', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'transactional', array('func' => $func), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'commit', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->commit();
    }

    public function rollback()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'rollback', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getClassMetadata', array('className' => $className), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'createQuery', array('dql' => $dql), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'createNamedQuery', array('name' => $name), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'createQueryBuilder', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'flush', array('entity' => $entity), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'clear', array('entityName' => $entityName), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->clear($entityName);
    }

    public function close()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'close', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->close();
    }

    public function persist($entity)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'persist', array('entity' => $entity), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'remove', array('entity' => $entity), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'refresh', array('entity' => $entity), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'detach', array('entity' => $entity), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'merge', array('entity' => $entity), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'contains', array('entity' => $entity), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getEventManager', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getConfiguration', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'isOpen', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getUnitOfWork', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getProxyFactory', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'initializeObject', array('obj' => $obj), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'getFilters', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'isFiltersStateClean', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, 'hasFilters', array(), $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        return $this->valueHolder5193c->hasFilters();
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

        $instance->initializerb9812 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5193c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5193c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5193c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb9812 && ($this->initializerb9812->__invoke($valueHolder5193c, $this, '__get', ['name' => $name], $this->initializerb9812) || 1) && $this->valueHolder5193c = $valueHolder5193c;

        if (isset(self::$publicProperties763db[$name])) {
            return $this->valueHolder5193c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
