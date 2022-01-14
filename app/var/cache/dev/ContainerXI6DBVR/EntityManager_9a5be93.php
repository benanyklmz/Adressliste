<?php

namespace ContainerXI6DBVR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere457e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55388 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbad47 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getConnection', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getMetadataFactory', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getExpressionBuilder', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'beginTransaction', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getCache', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'transactional', array('func' => $func), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'commit', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->commit();
    }

    public function rollback()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'rollback', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getClassMetadata', array('className' => $className), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'createQuery', array('dql' => $dql), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'createNamedQuery', array('name' => $name), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'createQueryBuilder', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'flush', array('entity' => $entity), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'clear', array('entityName' => $entityName), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->clear($entityName);
    }

    public function close()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'close', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->close();
    }

    public function persist($entity)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'persist', array('entity' => $entity), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'remove', array('entity' => $entity), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'refresh', array('entity' => $entity), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'detach', array('entity' => $entity), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'merge', array('entity' => $entity), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'contains', array('entity' => $entity), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getEventManager', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getConfiguration', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'isOpen', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getUnitOfWork', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getProxyFactory', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'initializeObject', array('obj' => $obj), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'getFilters', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'isFiltersStateClean', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'hasFilters', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return $this->valueHoldere457e->hasFilters();
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

        $instance->initializer55388 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere457e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere457e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere457e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, '__get', ['name' => $name], $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        if (isset(self::$publicPropertiesbad47[$name])) {
            return $this->valueHoldere457e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere457e;

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

        $targetObject = $this->valueHoldere457e;
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
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere457e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere457e;
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
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, '__isset', array('name' => $name), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere457e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere457e;
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
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, '__unset', array('name' => $name), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere457e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere457e;
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
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, '__clone', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        $this->valueHoldere457e = clone $this->valueHoldere457e;
    }

    public function __sleep()
    {
        $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, '__sleep', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;

        return array('valueHoldere457e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55388 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55388;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55388 && ($this->initializer55388->__invoke($valueHoldere457e, $this, 'initializeProxy', array(), $this->initializer55388) || 1) && $this->valueHoldere457e = $valueHoldere457e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere457e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere457e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
