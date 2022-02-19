<?php

namespace Container4ZHL7AH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1d77f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer488e8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties921ce = [
        
    ];

    public function getConnection()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getConnection', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getMetadataFactory', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getExpressionBuilder', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'beginTransaction', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getCache', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'transactional', array('func' => $func), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'commit', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->commit();
    }

    public function rollback()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'rollback', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getClassMetadata', array('className' => $className), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'createQuery', array('dql' => $dql), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'createNamedQuery', array('name' => $name), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'createQueryBuilder', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'flush', array('entity' => $entity), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'clear', array('entityName' => $entityName), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->clear($entityName);
    }

    public function close()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'close', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->close();
    }

    public function persist($entity)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'persist', array('entity' => $entity), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'remove', array('entity' => $entity), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'refresh', array('entity' => $entity), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'detach', array('entity' => $entity), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'merge', array('entity' => $entity), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'contains', array('entity' => $entity), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getEventManager', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getConfiguration', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'isOpen', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getUnitOfWork', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getProxyFactory', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'initializeObject', array('obj' => $obj), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'getFilters', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'isFiltersStateClean', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'hasFilters', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return $this->valueHolder1d77f->hasFilters();
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

        $instance->initializer488e8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1d77f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1d77f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1d77f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, '__get', ['name' => $name], $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        if (isset(self::$publicProperties921ce[$name])) {
            return $this->valueHolder1d77f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d77f;

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

        $targetObject = $this->valueHolder1d77f;
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
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d77f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1d77f;
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
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, '__isset', array('name' => $name), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d77f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1d77f;
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
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, '__unset', array('name' => $name), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d77f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1d77f;
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
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, '__clone', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        $this->valueHolder1d77f = clone $this->valueHolder1d77f;
    }

    public function __sleep()
    {
        $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, '__sleep', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;

        return array('valueHolder1d77f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer488e8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer488e8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer488e8 && ($this->initializer488e8->__invoke($valueHolder1d77f, $this, 'initializeProxy', array(), $this->initializer488e8) || 1) && $this->valueHolder1d77f = $valueHolder1d77f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1d77f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1d77f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
