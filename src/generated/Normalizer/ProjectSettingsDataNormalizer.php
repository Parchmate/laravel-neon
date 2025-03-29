<?php

namespace Parchmate\LaravelNeon\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\CheckArray;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ProjectSettingsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('quota', $data)) {
                $object->setQuota($this->denormalizer->denormalize($data['quota'], \Parchmate\LaravelNeon\Generated\Model\ProjectQuota::class, 'json', $context));
                unset($data['quota']);
            }
            if (\array_key_exists('allowed_ips', $data)) {
                $object->setAllowedIps($this->denormalizer->denormalize($data['allowed_ips'], \Parchmate\LaravelNeon\Generated\Model\AllowedIps::class, 'json', $context));
                unset($data['allowed_ips']);
            }
            if (\array_key_exists('enable_logical_replication', $data)) {
                $object->setEnableLogicalReplication($data['enable_logical_replication']);
                unset($data['enable_logical_replication']);
            }
            if (\array_key_exists('maintenance_window', $data)) {
                $object->setMaintenanceWindow($this->denormalizer->denormalize($data['maintenance_window'], \Parchmate\LaravelNeon\Generated\Model\MaintenanceWindow::class, 'json', $context));
                unset($data['maintenance_window']);
            }
            if (\array_key_exists('block_public_connections', $data)) {
                $object->setBlockPublicConnections($data['block_public_connections']);
                unset($data['block_public_connections']);
            }
            if (\array_key_exists('block_vpc_connections', $data)) {
                $object->setBlockVpcConnections($data['block_vpc_connections']);
                unset($data['block_vpc_connections']);
            }
            if (\array_key_exists('audit_log_level', $data)) {
                $object->setAuditLogLevel($data['audit_log_level']);
                unset($data['audit_log_level']);
            }
            if (\array_key_exists('preload_libraries', $data)) {
                $object->setPreloadLibraries($this->denormalizer->denormalize($data['preload_libraries'], \Parchmate\LaravelNeon\Generated\Model\PreloadLibraries::class, 'json', $context));
                unset($data['preload_libraries']);
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
            if ($object->isInitialized('quota') && null !== $object->getQuota()) {
                $data['quota'] = $this->normalizer->normalize($object->getQuota(), 'json', $context);
            }
            if ($object->isInitialized('allowedIps') && null !== $object->getAllowedIps()) {
                $data['allowed_ips'] = $this->normalizer->normalize($object->getAllowedIps(), 'json', $context);
            }
            if ($object->isInitialized('enableLogicalReplication') && null !== $object->getEnableLogicalReplication()) {
                $data['enable_logical_replication'] = $object->getEnableLogicalReplication();
            }
            if ($object->isInitialized('maintenanceWindow') && null !== $object->getMaintenanceWindow()) {
                $data['maintenance_window'] = $this->normalizer->normalize($object->getMaintenanceWindow(), 'json', $context);
            }
            if ($object->isInitialized('blockPublicConnections') && null !== $object->getBlockPublicConnections()) {
                $data['block_public_connections'] = $object->getBlockPublicConnections();
            }
            if ($object->isInitialized('blockVpcConnections') && null !== $object->getBlockVpcConnections()) {
                $data['block_vpc_connections'] = $object->getBlockVpcConnections();
            }
            if ($object->isInitialized('auditLogLevel') && null !== $object->getAuditLogLevel()) {
                $data['audit_log_level'] = $object->getAuditLogLevel();
            }
            if ($object->isInitialized('preloadLibraries') && null !== $object->getPreloadLibraries()) {
                $data['preload_libraries'] = $this->normalizer->normalize($object->getPreloadLibraries(), 'json', $context);
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
            return [\Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class => false];
        }
    }
} else {
    class ProjectSettingsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('quota', $data)) {
                $object->setQuota($this->denormalizer->denormalize($data['quota'], \Parchmate\LaravelNeon\Generated\Model\ProjectQuota::class, 'json', $context));
                unset($data['quota']);
            }
            if (\array_key_exists('allowed_ips', $data)) {
                $object->setAllowedIps($this->denormalizer->denormalize($data['allowed_ips'], \Parchmate\LaravelNeon\Generated\Model\AllowedIps::class, 'json', $context));
                unset($data['allowed_ips']);
            }
            if (\array_key_exists('enable_logical_replication', $data)) {
                $object->setEnableLogicalReplication($data['enable_logical_replication']);
                unset($data['enable_logical_replication']);
            }
            if (\array_key_exists('maintenance_window', $data)) {
                $object->setMaintenanceWindow($this->denormalizer->denormalize($data['maintenance_window'], \Parchmate\LaravelNeon\Generated\Model\MaintenanceWindow::class, 'json', $context));
                unset($data['maintenance_window']);
            }
            if (\array_key_exists('block_public_connections', $data)) {
                $object->setBlockPublicConnections($data['block_public_connections']);
                unset($data['block_public_connections']);
            }
            if (\array_key_exists('block_vpc_connections', $data)) {
                $object->setBlockVpcConnections($data['block_vpc_connections']);
                unset($data['block_vpc_connections']);
            }
            if (\array_key_exists('audit_log_level', $data)) {
                $object->setAuditLogLevel($data['audit_log_level']);
                unset($data['audit_log_level']);
            }
            if (\array_key_exists('preload_libraries', $data)) {
                $object->setPreloadLibraries($this->denormalizer->denormalize($data['preload_libraries'], \Parchmate\LaravelNeon\Generated\Model\PreloadLibraries::class, 'json', $context));
                unset($data['preload_libraries']);
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
            if ($object->isInitialized('quota') && null !== $object->getQuota()) {
                $data['quota'] = $this->normalizer->normalize($object->getQuota(), 'json', $context);
            }
            if ($object->isInitialized('allowedIps') && null !== $object->getAllowedIps()) {
                $data['allowed_ips'] = $this->normalizer->normalize($object->getAllowedIps(), 'json', $context);
            }
            if ($object->isInitialized('enableLogicalReplication') && null !== $object->getEnableLogicalReplication()) {
                $data['enable_logical_replication'] = $object->getEnableLogicalReplication();
            }
            if ($object->isInitialized('maintenanceWindow') && null !== $object->getMaintenanceWindow()) {
                $data['maintenance_window'] = $this->normalizer->normalize($object->getMaintenanceWindow(), 'json', $context);
            }
            if ($object->isInitialized('blockPublicConnections') && null !== $object->getBlockPublicConnections()) {
                $data['block_public_connections'] = $object->getBlockPublicConnections();
            }
            if ($object->isInitialized('blockVpcConnections') && null !== $object->getBlockVpcConnections()) {
                $data['block_vpc_connections'] = $object->getBlockVpcConnections();
            }
            if ($object->isInitialized('auditLogLevel') && null !== $object->getAuditLogLevel()) {
                $data['audit_log_level'] = $object->getAuditLogLevel();
            }
            if ($object->isInitialized('preloadLibraries') && null !== $object->getPreloadLibraries()) {
                $data['preload_libraries'] = $this->normalizer->normalize($object->getPreloadLibraries(), 'json', $context);
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
            return [\Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class => false];
        }
    }
}