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
    class ProjectListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectListItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectListItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ProjectListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('platform_id', $data)) {
                $object->setPlatformId($data['platform_id']);
                unset($data['platform_id']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('provisioner', $data)) {
                $object->setProvisioner($data['provisioner']);
                unset($data['provisioner']);
            }
            if (\array_key_exists('default_endpoint_settings', $data)) {
                $object->setDefaultEndpointSettings($this->denormalizer->denormalize($data['default_endpoint_settings'], \Vendor\Library\Generated\Model\DefaultEndpointSettings::class, 'json', $context));
                unset($data['default_endpoint_settings']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Vendor\Library\Generated\Model\ProjectSettingsData::class, 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('pg_version', $data)) {
                $object->setPgVersion($data['pg_version']);
                unset($data['pg_version']);
            }
            if (\array_key_exists('proxy_host', $data)) {
                $object->setProxyHost($data['proxy_host']);
                unset($data['proxy_host']);
            }
            if (\array_key_exists('branch_logical_size_limit', $data)) {
                $object->setBranchLogicalSizeLimit($data['branch_logical_size_limit']);
                unset($data['branch_logical_size_limit']);
            }
            if (\array_key_exists('branch_logical_size_limit_bytes', $data)) {
                $object->setBranchLogicalSizeLimitBytes($data['branch_logical_size_limit_bytes']);
                unset($data['branch_logical_size_limit_bytes']);
            }
            if (\array_key_exists('store_passwords', $data)) {
                $object->setStorePasswords($data['store_passwords']);
                unset($data['store_passwords']);
            }
            if (\array_key_exists('active_time', $data)) {
                $object->setActiveTime($data['active_time']);
                unset($data['active_time']);
            }
            if (\array_key_exists('cpu_used_sec', $data)) {
                $object->setCpuUsedSec($data['cpu_used_sec']);
                unset($data['cpu_used_sec']);
            }
            if (\array_key_exists('maintenance_starts_at', $data)) {
                $object->setMaintenanceStartsAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['maintenance_starts_at']));
                unset($data['maintenance_starts_at']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('synthetic_storage_size', $data)) {
                $object->setSyntheticStorageSize($data['synthetic_storage_size']);
                unset($data['synthetic_storage_size']);
            }
            if (\array_key_exists('quota_reset_at', $data)) {
                $object->setQuotaResetAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['quota_reset_at']));
                unset($data['quota_reset_at']);
            }
            if (\array_key_exists('owner_id', $data)) {
                $object->setOwnerId($data['owner_id']);
                unset($data['owner_id']);
            }
            if (\array_key_exists('compute_last_active_at', $data)) {
                $object->setComputeLastActiveAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['compute_last_active_at']));
                unset($data['compute_last_active_at']);
            }
            if (\array_key_exists('org_id', $data)) {
                $object->setOrgId($data['org_id']);
                unset($data['org_id']);
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
            $data['platform_id'] = $object->getPlatformId();
            $data['region_id'] = $object->getRegionId();
            $data['name'] = $object->getName();
            $data['provisioner'] = $object->getProvisioner();
            if ($object->isInitialized('defaultEndpointSettings') && null !== $object->getDefaultEndpointSettings()) {
                $data['default_endpoint_settings'] = $this->normalizer->normalize($object->getDefaultEndpointSettings(), 'json', $context);
            }
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            $data['pg_version'] = $object->getPgVersion();
            $data['proxy_host'] = $object->getProxyHost();
            $data['branch_logical_size_limit'] = $object->getBranchLogicalSizeLimit();
            $data['branch_logical_size_limit_bytes'] = $object->getBranchLogicalSizeLimitBytes();
            $data['store_passwords'] = $object->getStorePasswords();
            $data['active_time'] = $object->getActiveTime();
            $data['cpu_used_sec'] = $object->getCpuUsedSec();
            if ($object->isInitialized('maintenanceStartsAt') && null !== $object->getMaintenanceStartsAt()) {
                $data['maintenance_starts_at'] = $object->getMaintenanceStartsAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['creation_source'] = $object->getCreationSource();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('syntheticStorageSize') && null !== $object->getSyntheticStorageSize()) {
                $data['synthetic_storage_size'] = $object->getSyntheticStorageSize();
            }
            if ($object->isInitialized('quotaResetAt') && null !== $object->getQuotaResetAt()) {
                $data['quota_reset_at'] = $object->getQuotaResetAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['owner_id'] = $object->getOwnerId();
            if ($object->isInitialized('computeLastActiveAt') && null !== $object->getComputeLastActiveAt()) {
                $data['compute_last_active_at'] = $object->getComputeLastActiveAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('orgId') && null !== $object->getOrgId()) {
                $data['org_id'] = $object->getOrgId();
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
            return [\Vendor\Library\Generated\Model\ProjectListItem::class => false];
        }
    }
} else {
    class ProjectListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectListItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectListItem::class;
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
            $object = new \Vendor\Library\Generated\Model\ProjectListItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('platform_id', $data)) {
                $object->setPlatformId($data['platform_id']);
                unset($data['platform_id']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('provisioner', $data)) {
                $object->setProvisioner($data['provisioner']);
                unset($data['provisioner']);
            }
            if (\array_key_exists('default_endpoint_settings', $data)) {
                $object->setDefaultEndpointSettings($this->denormalizer->denormalize($data['default_endpoint_settings'], \Vendor\Library\Generated\Model\DefaultEndpointSettings::class, 'json', $context));
                unset($data['default_endpoint_settings']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Vendor\Library\Generated\Model\ProjectSettingsData::class, 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('pg_version', $data)) {
                $object->setPgVersion($data['pg_version']);
                unset($data['pg_version']);
            }
            if (\array_key_exists('proxy_host', $data)) {
                $object->setProxyHost($data['proxy_host']);
                unset($data['proxy_host']);
            }
            if (\array_key_exists('branch_logical_size_limit', $data)) {
                $object->setBranchLogicalSizeLimit($data['branch_logical_size_limit']);
                unset($data['branch_logical_size_limit']);
            }
            if (\array_key_exists('branch_logical_size_limit_bytes', $data)) {
                $object->setBranchLogicalSizeLimitBytes($data['branch_logical_size_limit_bytes']);
                unset($data['branch_logical_size_limit_bytes']);
            }
            if (\array_key_exists('store_passwords', $data)) {
                $object->setStorePasswords($data['store_passwords']);
                unset($data['store_passwords']);
            }
            if (\array_key_exists('active_time', $data)) {
                $object->setActiveTime($data['active_time']);
                unset($data['active_time']);
            }
            if (\array_key_exists('cpu_used_sec', $data)) {
                $object->setCpuUsedSec($data['cpu_used_sec']);
                unset($data['cpu_used_sec']);
            }
            if (\array_key_exists('maintenance_starts_at', $data)) {
                $object->setMaintenanceStartsAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['maintenance_starts_at']));
                unset($data['maintenance_starts_at']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('synthetic_storage_size', $data)) {
                $object->setSyntheticStorageSize($data['synthetic_storage_size']);
                unset($data['synthetic_storage_size']);
            }
            if (\array_key_exists('quota_reset_at', $data)) {
                $object->setQuotaResetAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['quota_reset_at']));
                unset($data['quota_reset_at']);
            }
            if (\array_key_exists('owner_id', $data)) {
                $object->setOwnerId($data['owner_id']);
                unset($data['owner_id']);
            }
            if (\array_key_exists('compute_last_active_at', $data)) {
                $object->setComputeLastActiveAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['compute_last_active_at']));
                unset($data['compute_last_active_at']);
            }
            if (\array_key_exists('org_id', $data)) {
                $object->setOrgId($data['org_id']);
                unset($data['org_id']);
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
            $data['platform_id'] = $object->getPlatformId();
            $data['region_id'] = $object->getRegionId();
            $data['name'] = $object->getName();
            $data['provisioner'] = $object->getProvisioner();
            if ($object->isInitialized('defaultEndpointSettings') && null !== $object->getDefaultEndpointSettings()) {
                $data['default_endpoint_settings'] = $this->normalizer->normalize($object->getDefaultEndpointSettings(), 'json', $context);
            }
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            $data['pg_version'] = $object->getPgVersion();
            $data['proxy_host'] = $object->getProxyHost();
            $data['branch_logical_size_limit'] = $object->getBranchLogicalSizeLimit();
            $data['branch_logical_size_limit_bytes'] = $object->getBranchLogicalSizeLimitBytes();
            $data['store_passwords'] = $object->getStorePasswords();
            $data['active_time'] = $object->getActiveTime();
            $data['cpu_used_sec'] = $object->getCpuUsedSec();
            if ($object->isInitialized('maintenanceStartsAt') && null !== $object->getMaintenanceStartsAt()) {
                $data['maintenance_starts_at'] = $object->getMaintenanceStartsAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['creation_source'] = $object->getCreationSource();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('syntheticStorageSize') && null !== $object->getSyntheticStorageSize()) {
                $data['synthetic_storage_size'] = $object->getSyntheticStorageSize();
            }
            if ($object->isInitialized('quotaResetAt') && null !== $object->getQuotaResetAt()) {
                $data['quota_reset_at'] = $object->getQuotaResetAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['owner_id'] = $object->getOwnerId();
            if ($object->isInitialized('computeLastActiveAt') && null !== $object->getComputeLastActiveAt()) {
                $data['compute_last_active_at'] = $object->getComputeLastActiveAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('orgId') && null !== $object->getOrgId()) {
                $data['org_id'] = $object->getOrgId();
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
            return [\Vendor\Library\Generated\Model\ProjectListItem::class => false];
        }
    }
}