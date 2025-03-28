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
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Project::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Project::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Project();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data_storage_bytes_hour', $data)) {
                $object->setDataStorageBytesHour($data['data_storage_bytes_hour']);
                unset($data['data_storage_bytes_hour']);
            }
            if (\array_key_exists('data_transfer_bytes', $data)) {
                $object->setDataTransferBytes($data['data_transfer_bytes']);
                unset($data['data_transfer_bytes']);
            }
            if (\array_key_exists('written_data_bytes', $data)) {
                $object->setWrittenDataBytes($data['written_data_bytes']);
                unset($data['written_data_bytes']);
            }
            if (\array_key_exists('compute_time_seconds', $data)) {
                $object->setComputeTimeSeconds($data['compute_time_seconds']);
                unset($data['compute_time_seconds']);
            }
            if (\array_key_exists('active_time_seconds', $data)) {
                $object->setActiveTimeSeconds($data['active_time_seconds']);
                unset($data['active_time_seconds']);
            }
            if (\array_key_exists('cpu_used_sec', $data)) {
                $object->setCpuUsedSec($data['cpu_used_sec']);
                unset($data['cpu_used_sec']);
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
            if (\array_key_exists('maintenance_starts_at', $data)) {
                $object->setMaintenanceStartsAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['maintenance_starts_at']));
                unset($data['maintenance_starts_at']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('history_retention_seconds', $data)) {
                $object->setHistoryRetentionSeconds($data['history_retention_seconds']);
                unset($data['history_retention_seconds']);
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
            if (\array_key_exists('consumption_period_start', $data)) {
                $object->setConsumptionPeriodStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['consumption_period_start']));
                unset($data['consumption_period_start']);
            }
            if (\array_key_exists('consumption_period_end', $data)) {
                $object->setConsumptionPeriodEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['consumption_period_end']));
                unset($data['consumption_period_end']);
            }
            if (\array_key_exists('quota_reset_at', $data)) {
                $object->setQuotaResetAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['quota_reset_at']));
                unset($data['quota_reset_at']);
            }
            if (\array_key_exists('owner_id', $data)) {
                $object->setOwnerId($data['owner_id']);
                unset($data['owner_id']);
            }
            if (\array_key_exists('owner', $data)) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], \Vendor\Library\Generated\Model\ProjectOwnerData::class, 'json', $context));
                unset($data['owner']);
            }
            if (\array_key_exists('compute_last_active_at', $data)) {
                $object->setComputeLastActiveAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['compute_last_active_at']));
                unset($data['compute_last_active_at']);
            }
            if (\array_key_exists('org_id', $data)) {
                $object->setOrgId($data['org_id']);
                unset($data['org_id']);
            }
            if (\array_key_exists('maintenance_scheduled_for', $data)) {
                $object->setMaintenanceScheduledFor(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['maintenance_scheduled_for']));
                unset($data['maintenance_scheduled_for']);
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
            $data['data_storage_bytes_hour'] = $object->getDataStorageBytesHour();
            $data['data_transfer_bytes'] = $object->getDataTransferBytes();
            $data['written_data_bytes'] = $object->getWrittenDataBytes();
            $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            $data['cpu_used_sec'] = $object->getCpuUsedSec();
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
            if ($object->isInitialized('maintenanceStartsAt') && null !== $object->getMaintenanceStartsAt()) {
                $data['maintenance_starts_at'] = $object->getMaintenanceStartsAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['creation_source'] = $object->getCreationSource();
            $data['history_retention_seconds'] = $object->getHistoryRetentionSeconds();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('syntheticStorageSize') && null !== $object->getSyntheticStorageSize()) {
                $data['synthetic_storage_size'] = $object->getSyntheticStorageSize();
            }
            $data['consumption_period_start'] = $object->getConsumptionPeriodStart()?->format('Y-m-d\TH:i:sP');
            $data['consumption_period_end'] = $object->getConsumptionPeriodEnd()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('quotaResetAt') && null !== $object->getQuotaResetAt()) {
                $data['quota_reset_at'] = $object->getQuotaResetAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['owner_id'] = $object->getOwnerId();
            if ($object->isInitialized('owner') && null !== $object->getOwner()) {
                $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            }
            if ($object->isInitialized('computeLastActiveAt') && null !== $object->getComputeLastActiveAt()) {
                $data['compute_last_active_at'] = $object->getComputeLastActiveAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('orgId') && null !== $object->getOrgId()) {
                $data['org_id'] = $object->getOrgId();
            }
            if ($object->isInitialized('maintenanceScheduledFor') && null !== $object->getMaintenanceScheduledFor()) {
                $data['maintenance_scheduled_for'] = $object->getMaintenanceScheduledFor()?->format('Y-m-d\TH:i:sP');
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
            return [\Vendor\Library\Generated\Model\Project::class => false];
        }
    }
} else {
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Project::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Project::class;
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
            $object = new \Vendor\Library\Generated\Model\Project();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data_storage_bytes_hour', $data)) {
                $object->setDataStorageBytesHour($data['data_storage_bytes_hour']);
                unset($data['data_storage_bytes_hour']);
            }
            if (\array_key_exists('data_transfer_bytes', $data)) {
                $object->setDataTransferBytes($data['data_transfer_bytes']);
                unset($data['data_transfer_bytes']);
            }
            if (\array_key_exists('written_data_bytes', $data)) {
                $object->setWrittenDataBytes($data['written_data_bytes']);
                unset($data['written_data_bytes']);
            }
            if (\array_key_exists('compute_time_seconds', $data)) {
                $object->setComputeTimeSeconds($data['compute_time_seconds']);
                unset($data['compute_time_seconds']);
            }
            if (\array_key_exists('active_time_seconds', $data)) {
                $object->setActiveTimeSeconds($data['active_time_seconds']);
                unset($data['active_time_seconds']);
            }
            if (\array_key_exists('cpu_used_sec', $data)) {
                $object->setCpuUsedSec($data['cpu_used_sec']);
                unset($data['cpu_used_sec']);
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
            if (\array_key_exists('maintenance_starts_at', $data)) {
                $object->setMaintenanceStartsAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['maintenance_starts_at']));
                unset($data['maintenance_starts_at']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('history_retention_seconds', $data)) {
                $object->setHistoryRetentionSeconds($data['history_retention_seconds']);
                unset($data['history_retention_seconds']);
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
            if (\array_key_exists('consumption_period_start', $data)) {
                $object->setConsumptionPeriodStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['consumption_period_start']));
                unset($data['consumption_period_start']);
            }
            if (\array_key_exists('consumption_period_end', $data)) {
                $object->setConsumptionPeriodEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['consumption_period_end']));
                unset($data['consumption_period_end']);
            }
            if (\array_key_exists('quota_reset_at', $data)) {
                $object->setQuotaResetAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['quota_reset_at']));
                unset($data['quota_reset_at']);
            }
            if (\array_key_exists('owner_id', $data)) {
                $object->setOwnerId($data['owner_id']);
                unset($data['owner_id']);
            }
            if (\array_key_exists('owner', $data)) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], \Vendor\Library\Generated\Model\ProjectOwnerData::class, 'json', $context));
                unset($data['owner']);
            }
            if (\array_key_exists('compute_last_active_at', $data)) {
                $object->setComputeLastActiveAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['compute_last_active_at']));
                unset($data['compute_last_active_at']);
            }
            if (\array_key_exists('org_id', $data)) {
                $object->setOrgId($data['org_id']);
                unset($data['org_id']);
            }
            if (\array_key_exists('maintenance_scheduled_for', $data)) {
                $object->setMaintenanceScheduledFor(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['maintenance_scheduled_for']));
                unset($data['maintenance_scheduled_for']);
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
            $data['data_storage_bytes_hour'] = $object->getDataStorageBytesHour();
            $data['data_transfer_bytes'] = $object->getDataTransferBytes();
            $data['written_data_bytes'] = $object->getWrittenDataBytes();
            $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            $data['cpu_used_sec'] = $object->getCpuUsedSec();
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
            if ($object->isInitialized('maintenanceStartsAt') && null !== $object->getMaintenanceStartsAt()) {
                $data['maintenance_starts_at'] = $object->getMaintenanceStartsAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['creation_source'] = $object->getCreationSource();
            $data['history_retention_seconds'] = $object->getHistoryRetentionSeconds();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('syntheticStorageSize') && null !== $object->getSyntheticStorageSize()) {
                $data['synthetic_storage_size'] = $object->getSyntheticStorageSize();
            }
            $data['consumption_period_start'] = $object->getConsumptionPeriodStart()?->format('Y-m-d\TH:i:sP');
            $data['consumption_period_end'] = $object->getConsumptionPeriodEnd()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('quotaResetAt') && null !== $object->getQuotaResetAt()) {
                $data['quota_reset_at'] = $object->getQuotaResetAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['owner_id'] = $object->getOwnerId();
            if ($object->isInitialized('owner') && null !== $object->getOwner()) {
                $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            }
            if ($object->isInitialized('computeLastActiveAt') && null !== $object->getComputeLastActiveAt()) {
                $data['compute_last_active_at'] = $object->getComputeLastActiveAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('orgId') && null !== $object->getOrgId()) {
                $data['org_id'] = $object->getOrgId();
            }
            if ($object->isInitialized('maintenanceScheduledFor') && null !== $object->getMaintenanceScheduledFor()) {
                $data['maintenance_scheduled_for'] = $object->getMaintenanceScheduledFor()?->format('Y-m-d\TH:i:sP');
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
            return [\Vendor\Library\Generated\Model\Project::class => false];
        }
    }
}