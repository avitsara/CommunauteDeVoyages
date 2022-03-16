<?php

namespace ContainerGh3SqwZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder81e3b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13e97 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbee51 = [
        
    ];

    public function getConnection()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getConnection', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getMetadataFactory', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getExpressionBuilder', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'beginTransaction', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getCache', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'transactional', array('func' => $func), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'commit', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->commit();
    }

    public function rollback()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'rollback', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getClassMetadata', array('className' => $className), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'createQuery', array('dql' => $dql), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'createNamedQuery', array('name' => $name), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'createQueryBuilder', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'flush', array('entity' => $entity), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'clear', array('entityName' => $entityName), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->clear($entityName);
    }

    public function close()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'close', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->close();
    }

    public function persist($entity)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'persist', array('entity' => $entity), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'remove', array('entity' => $entity), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'refresh', array('entity' => $entity), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'detach', array('entity' => $entity), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'merge', array('entity' => $entity), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'contains', array('entity' => $entity), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getEventManager', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getConfiguration', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'isOpen', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getUnitOfWork', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getProxyFactory', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'initializeObject', array('obj' => $obj), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'getFilters', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'isFiltersStateClean', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'hasFilters', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return $this->valueHolder81e3b->hasFilters();
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

        $instance->initializer13e97 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder81e3b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder81e3b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder81e3b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, '__get', ['name' => $name], $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        if (isset(self::$publicPropertiesbee51[$name])) {
            return $this->valueHolder81e3b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81e3b;

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

        $targetObject = $this->valueHolder81e3b;
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
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81e3b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder81e3b;
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
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, '__isset', array('name' => $name), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81e3b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder81e3b;
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
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, '__unset', array('name' => $name), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81e3b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder81e3b;
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
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, '__clone', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        $this->valueHolder81e3b = clone $this->valueHolder81e3b;
    }

    public function __sleep()
    {
        $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, '__sleep', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;

        return array('valueHolder81e3b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13e97 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13e97;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13e97 && ($this->initializer13e97->__invoke($valueHolder81e3b, $this, 'initializeProxy', array(), $this->initializer13e97) || 1) && $this->valueHolder81e3b = $valueHolder81e3b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder81e3b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder81e3b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
