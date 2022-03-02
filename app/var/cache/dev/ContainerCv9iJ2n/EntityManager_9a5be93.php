<?php

namespace ContainerCv9iJ2n;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfa382 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb520f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties06822 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getConnection', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getMetadataFactory', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getExpressionBuilder', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'beginTransaction', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getCache', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'transactional', array('func' => $func), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'commit', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->commit();
    }

    public function rollback()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'rollback', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getClassMetadata', array('className' => $className), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'createQuery', array('dql' => $dql), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'createNamedQuery', array('name' => $name), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'createQueryBuilder', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'flush', array('entity' => $entity), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'clear', array('entityName' => $entityName), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->clear($entityName);
    }

    public function close()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'close', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->close();
    }

    public function persist($entity)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'persist', array('entity' => $entity), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'remove', array('entity' => $entity), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'refresh', array('entity' => $entity), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'detach', array('entity' => $entity), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'merge', array('entity' => $entity), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'contains', array('entity' => $entity), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getEventManager', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getConfiguration', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'isOpen', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getUnitOfWork', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getProxyFactory', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'initializeObject', array('obj' => $obj), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'getFilters', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'isFiltersStateClean', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'hasFilters', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return $this->valueHolderfa382->hasFilters();
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

        $instance->initializerb520f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfa382) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfa382 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfa382->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, '__get', ['name' => $name], $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        if (isset(self::$publicProperties06822[$name])) {
            return $this->valueHolderfa382->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa382;

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

        $targetObject = $this->valueHolderfa382;
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
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa382;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfa382;
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
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, '__isset', array('name' => $name), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa382;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfa382;
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
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, '__unset', array('name' => $name), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa382;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfa382;
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
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, '__clone', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        $this->valueHolderfa382 = clone $this->valueHolderfa382;
    }

    public function __sleep()
    {
        $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, '__sleep', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;

        return array('valueHolderfa382');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb520f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb520f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb520f && ($this->initializerb520f->__invoke($valueHolderfa382, $this, 'initializeProxy', array(), $this->initializerb520f) || 1) && $this->valueHolderfa382 = $valueHolderfa382;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfa382;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfa382;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
