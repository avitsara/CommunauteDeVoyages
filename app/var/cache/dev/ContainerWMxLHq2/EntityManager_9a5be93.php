<?php

namespace ContainerWMxLHq2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderae7f8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer93069 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0c363 = [
        
    ];

    public function getConnection()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getConnection', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getMetadataFactory', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getExpressionBuilder', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'beginTransaction', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getCache', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'transactional', array('func' => $func), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'commit', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->commit();
    }

    public function rollback()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'rollback', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getClassMetadata', array('className' => $className), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'createQuery', array('dql' => $dql), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'createNamedQuery', array('name' => $name), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'createQueryBuilder', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'flush', array('entity' => $entity), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'clear', array('entityName' => $entityName), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->clear($entityName);
    }

    public function close()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'close', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->close();
    }

    public function persist($entity)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'persist', array('entity' => $entity), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'remove', array('entity' => $entity), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'refresh', array('entity' => $entity), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'detach', array('entity' => $entity), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'merge', array('entity' => $entity), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'contains', array('entity' => $entity), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getEventManager', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getConfiguration', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'isOpen', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getUnitOfWork', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getProxyFactory', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'initializeObject', array('obj' => $obj), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'getFilters', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'isFiltersStateClean', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'hasFilters', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return $this->valueHolderae7f8->hasFilters();
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

        $instance->initializer93069 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderae7f8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderae7f8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderae7f8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, '__get', ['name' => $name], $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        if (isset(self::$publicProperties0c363[$name])) {
            return $this->valueHolderae7f8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae7f8;

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

        $targetObject = $this->valueHolderae7f8;
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
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae7f8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderae7f8;
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
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, '__isset', array('name' => $name), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae7f8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderae7f8;
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
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, '__unset', array('name' => $name), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae7f8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderae7f8;
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
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, '__clone', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        $this->valueHolderae7f8 = clone $this->valueHolderae7f8;
    }

    public function __sleep()
    {
        $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, '__sleep', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;

        return array('valueHolderae7f8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93069 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93069;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer93069 && ($this->initializer93069->__invoke($valueHolderae7f8, $this, 'initializeProxy', array(), $this->initializer93069) || 1) && $this->valueHolderae7f8 = $valueHolderae7f8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderae7f8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderae7f8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
