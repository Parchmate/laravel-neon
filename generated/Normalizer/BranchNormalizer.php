<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Branch::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Branch::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Branch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            }
            if (\array_key_exists('parent_id', $data)) {
                $object->setParentId($data['parent_id']);
                unset($data['parent_id']);
            }
            if (\array_key_exists('parent_lsn', $data)) {
                $object->setParentLsn($data['parent_lsn']);
                unset($data['parent_lsn']);
            }
            if (\array_key_exists('parent_timestamp', $data)) {
                $object->setParentTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['parent_timestamp']));
                unset($data['parent_timestamp']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('current_state', $data)) {
                $object->setCurrentState($data['current_state']);
                unset($data['current_state']);
            }
            if (\array_key_exists('pending_state', $data)) {
                $object->setPendingState($data['pending_state']);
                unset($data['pending_state']);
            }
            if (\array_key_exists('state_changed_at', $data)) {
                $object->setStateChangedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['state_changed_at']));
                unset($data['state_changed_at']);
            }
            if (\array_key_exists('logical_size', $data)) {
                $object->setLogicalSize($data['logical_size']);
                unset($data['logical_size']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('primary', $data)) {
                $object->setPrimary($data['primary']);
                unset($data['primary']);
            }
            if (\array_key_exists('default', $data)) {
                $object->setDefault($data['default']);
                unset($data['default']);
            }
            if (\array_key_exists('protected', $data)) {
                $object->setProtected($data['protected']);
                unset($data['protected']);
            }
            if (\array_key_exists('cpu_used_sec', $data)) {
                $object->setCpuUsedSec($data['cpu_used_sec']);
                unset($data['cpu_used_sec']);
            }
            if (\array_key_exists('compute_time_seconds', $data)) {
                $object->setComputeTimeSeconds($data['compute_time_seconds']);
                unset($data['compute_time_seconds']);
            }
            if (\array_key_exists('active_time_seconds', $data)) {
                $object->setActiveTimeSeconds($data['active_time_seconds']);
                unset($data['active_time_seconds']);
            }
            if (\array_key_exists('written_data_bytes', $data)) {
                $object->setWrittenDataBytes($data['written_data_bytes']);
                unset($data['written_data_bytes']);
            }
            if (\array_key_exists('data_transfer_bytes', $data)) {
                $object->setDataTransferBytes($data['data_transfer_bytes']);
                unset($data['data_transfer_bytes']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('last_reset_at', $data)) {
                $object->setLastResetAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_reset_at']));
                unset($data['last_reset_at']);
            }
            if (\array_key_exists('created_by', $data)) {
                $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], \Vendor\Library\Generated\Model\BranchCreatedBy::class, 'json', $context));
                unset($data['created_by']);
            }
            if (\array_key_exists('init_source', $data)) {
                $object->setInitSource($data['init_source']);
                unset($data['init_source']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['project_id'] = $object->getProjectId();
            if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
                $data['parent_id'] = $object->getParentId();
            }
            if ($object->isInitialized('parentLsn') && null !== $object->getParentLsn()) {
                $data['parent_lsn'] = $object->getParentLsn();
            }
            if ($object->isInitialized('parentTimestamp') && null !== $object->getParentTimestamp()) {
                $data['parent_timestamp'] = $object->getParentTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            $data['name'] = $object->getName();
            $data['current_state'] = $object->getCurrentState();
            if ($object->isInitialized('pendingState') && null !== $object->getPendingState()) {
                $data['pending_state'] = $object->getPendingState();
            }
            $data['state_changed_at'] = $object->getStateChangedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('logicalSize') && null !== $object->getLogicalSize()) {
                $data['logical_size'] = $object->getLogicalSize();
            }
            $data['creation_source'] = $object->getCreationSource();
            if ($object->isInitialized('primary') && null !== $object->getPrimary()) {
                $data['primary'] = $object->getPrimary();
            }
            $data['default'] = $object->getDefault();
            $data['protected'] = $object->getProtected();
            $data['cpu_used_sec'] = $object->getCpuUsedSec();
            $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            $data['written_data_bytes'] = $object->getWrittenDataBytes();
            $data['data_transfer_bytes'] = $object->getDataTransferBytes();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('lastResetAt') && null !== $object->getLastResetAt()) {
                $data['last_reset_at'] = $object->getLastResetAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['created_by'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
            }
            if ($object->isInitialized('initSource') && null !== $object->getInitSource()) {
                $data['init_source'] = $object->getInitSource();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Branch::class => false];
        }
    }
} else {
    class BranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Branch::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Branch::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Branch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            }
            if (\array_key_exists('parent_id', $data)) {
                $object->setParentId($data['parent_id']);
                unset($data['parent_id']);
            }
            if (\array_key_exists('parent_lsn', $data)) {
                $object->setParentLsn($data['parent_lsn']);
                unset($data['parent_lsn']);
            }
            if (\array_key_exists('parent_timestamp', $data)) {
                $object->setParentTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['parent_timestamp']));
                unset($data['parent_timestamp']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('current_state', $data)) {
                $object->setCurrentState($data['current_state']);
                unset($data['current_state']);
            }
            if (\array_key_exists('pending_state', $data)) {
                $object->setPendingState($data['pending_state']);
                unset($data['pending_state']);
            }
            if (\array_key_exists('state_changed_at', $data)) {
                $object->setStateChangedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['state_changed_at']));
                unset($data['state_changed_at']);
            }
            if (\array_key_exists('logical_size', $data)) {
                $object->setLogicalSize($data['logical_size']);
                unset($data['logical_size']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('primary', $data)) {
                $object->setPrimary($data['primary']);
                unset($data['primary']);
            }
            if (\array_key_exists('default', $data)) {
                $object->setDefault($data['default']);
                unset($data['default']);
            }
            if (\array_key_exists('protected', $data)) {
                $object->setProtected($data['protected']);
                unset($data['protected']);
            }
            if (\array_key_exists('cpu_used_sec', $data)) {
                $object->setCpuUsedSec($data['cpu_used_sec']);
                unset($data['cpu_used_sec']);
            }
            if (\array_key_exists('compute_time_seconds', $data)) {
                $object->setComputeTimeSeconds($data['compute_time_seconds']);
                unset($data['compute_time_seconds']);
            }
            if (\array_key_exists('active_time_seconds', $data)) {
                $object->setActiveTimeSeconds($data['active_time_seconds']);
                unset($data['active_time_seconds']);
            }
            if (\array_key_exists('written_data_bytes', $data)) {
                $object->setWrittenDataBytes($data['written_data_bytes']);
                unset($data['written_data_bytes']);
            }
            if (\array_key_exists('data_transfer_bytes', $data)) {
                $object->setDataTransferBytes($data['data_transfer_bytes']);
                unset($data['data_transfer_bytes']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('last_reset_at', $data)) {
                $object->setLastResetAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_reset_at']));
                unset($data['last_reset_at']);
            }
            if (\array_key_exists('created_by', $data)) {
                $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], \Vendor\Library\Generated\Model\BranchCreatedBy::class, 'json', $context));
                unset($data['created_by']);
            }
            if (\array_key_exists('init_source', $data)) {
                $object->setInitSource($data['init_source']);
                unset($data['init_source']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['project_id'] = $object->getProjectId();
            if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
                $data['parent_id'] = $object->getParentId();
            }
            if ($object->isInitialized('parentLsn') && null !== $object->getParentLsn()) {
                $data['parent_lsn'] = $object->getParentLsn();
            }
            if ($object->isInitialized('parentTimestamp') && null !== $object->getParentTimestamp()) {
                $data['parent_timestamp'] = $object->getParentTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            $data['name'] = $object->getName();
            $data['current_state'] = $object->getCurrentState();
            if ($object->isInitialized('pendingState') && null !== $object->getPendingState()) {
                $data['pending_state'] = $object->getPendingState();
            }
            $data['state_changed_at'] = $object->getStateChangedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('logicalSize') && null !== $object->getLogicalSize()) {
                $data['logical_size'] = $object->getLogicalSize();
            }
            $data['creation_source'] = $object->getCreationSource();
            if ($object->isInitialized('primary') && null !== $object->getPrimary()) {
                $data['primary'] = $object->getPrimary();
            }
            $data['default'] = $object->getDefault();
            $data['protected'] = $object->getProtected();
            $data['cpu_used_sec'] = $object->getCpuUsedSec();
            $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            $data['written_data_bytes'] = $object->getWrittenDataBytes();
            $data['data_transfer_bytes'] = $object->getDataTransferBytes();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('lastResetAt') && null !== $object->getLastResetAt()) {
                $data['last_reset_at'] = $object->getLastResetAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['created_by'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
            }
            if ($object->isInitialized('initSource') && null !== $object->getInitSource()) {
                $data['init_source'] = $object->getInitSource();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Branch::class => false];
        }
    }
}