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
    class ProjectCreateRequestProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ProjectCreateRequestProject();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Vendor\Library\Generated\Model\ProjectSettingsData::class, 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Vendor\Library\Generated\Model\ProjectCreateRequestProjectBranch::class, 'json', $context));
                unset($data['branch']);
            }
            if (\array_key_exists('autoscaling_limit_min_cu', $data)) {
                $object->setAutoscalingLimitMinCu($data['autoscaling_limit_min_cu']);
                unset($data['autoscaling_limit_min_cu']);
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data)) {
                $object->setAutoscalingLimitMaxCu($data['autoscaling_limit_max_cu']);
                unset($data['autoscaling_limit_max_cu']);
            }
            if (\array_key_exists('provisioner', $data)) {
                $object->setProvisioner($data['provisioner']);
                unset($data['provisioner']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('default_endpoint_settings', $data)) {
                $object->setDefaultEndpointSettings($this->denormalizer->denormalize($data['default_endpoint_settings'], \Vendor\Library\Generated\Model\DefaultEndpointSettings::class, 'json', $context));
                unset($data['default_endpoint_settings']);
            }
            if (\array_key_exists('pg_version', $data)) {
                $object->setPgVersion($data['pg_version']);
                unset($data['pg_version']);
            }
            if (\array_key_exists('store_passwords', $data)) {
                $object->setStorePasswords($data['store_passwords']);
                unset($data['store_passwords']);
            }
            if (\array_key_exists('history_retention_seconds', $data)) {
                $object->setHistoryRetentionSeconds($data['history_retention_seconds']);
                unset($data['history_retention_seconds']);
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
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('branch') && null !== $object->getBranch()) {
                $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            }
            if ($object->isInitialized('autoscalingLimitMinCu') && null !== $object->getAutoscalingLimitMinCu()) {
                $data['autoscaling_limit_min_cu'] = $object->getAutoscalingLimitMinCu();
            }
            if ($object->isInitialized('autoscalingLimitMaxCu') && null !== $object->getAutoscalingLimitMaxCu()) {
                $data['autoscaling_limit_max_cu'] = $object->getAutoscalingLimitMaxCu();
            }
            if ($object->isInitialized('provisioner') && null !== $object->getProvisioner()) {
                $data['provisioner'] = $object->getProvisioner();
            }
            if ($object->isInitialized('regionId') && null !== $object->getRegionId()) {
                $data['region_id'] = $object->getRegionId();
            }
            if ($object->isInitialized('defaultEndpointSettings') && null !== $object->getDefaultEndpointSettings()) {
                $data['default_endpoint_settings'] = $this->normalizer->normalize($object->getDefaultEndpointSettings(), 'json', $context);
            }
            if ($object->isInitialized('pgVersion') && null !== $object->getPgVersion()) {
                $data['pg_version'] = $object->getPgVersion();
            }
            if ($object->isInitialized('storePasswords') && null !== $object->getStorePasswords()) {
                $data['store_passwords'] = $object->getStorePasswords();
            }
            if ($object->isInitialized('historyRetentionSeconds') && null !== $object->getHistoryRetentionSeconds()) {
                $data['history_retention_seconds'] = $object->getHistoryRetentionSeconds();
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
            return [\Vendor\Library\Generated\Model\ProjectCreateRequestProject::class => false];
        }
    }
} else {
    class ProjectCreateRequestProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class;
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
            $object = new \Vendor\Library\Generated\Model\ProjectCreateRequestProject();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Vendor\Library\Generated\Model\ProjectSettingsData::class, 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Vendor\Library\Generated\Model\ProjectCreateRequestProjectBranch::class, 'json', $context));
                unset($data['branch']);
            }
            if (\array_key_exists('autoscaling_limit_min_cu', $data)) {
                $object->setAutoscalingLimitMinCu($data['autoscaling_limit_min_cu']);
                unset($data['autoscaling_limit_min_cu']);
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data)) {
                $object->setAutoscalingLimitMaxCu($data['autoscaling_limit_max_cu']);
                unset($data['autoscaling_limit_max_cu']);
            }
            if (\array_key_exists('provisioner', $data)) {
                $object->setProvisioner($data['provisioner']);
                unset($data['provisioner']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('default_endpoint_settings', $data)) {
                $object->setDefaultEndpointSettings($this->denormalizer->denormalize($data['default_endpoint_settings'], \Vendor\Library\Generated\Model\DefaultEndpointSettings::class, 'json', $context));
                unset($data['default_endpoint_settings']);
            }
            if (\array_key_exists('pg_version', $data)) {
                $object->setPgVersion($data['pg_version']);
                unset($data['pg_version']);
            }
            if (\array_key_exists('store_passwords', $data)) {
                $object->setStorePasswords($data['store_passwords']);
                unset($data['store_passwords']);
            }
            if (\array_key_exists('history_retention_seconds', $data)) {
                $object->setHistoryRetentionSeconds($data['history_retention_seconds']);
                unset($data['history_retention_seconds']);
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
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('branch') && null !== $object->getBranch()) {
                $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            }
            if ($object->isInitialized('autoscalingLimitMinCu') && null !== $object->getAutoscalingLimitMinCu()) {
                $data['autoscaling_limit_min_cu'] = $object->getAutoscalingLimitMinCu();
            }
            if ($object->isInitialized('autoscalingLimitMaxCu') && null !== $object->getAutoscalingLimitMaxCu()) {
                $data['autoscaling_limit_max_cu'] = $object->getAutoscalingLimitMaxCu();
            }
            if ($object->isInitialized('provisioner') && null !== $object->getProvisioner()) {
                $data['provisioner'] = $object->getProvisioner();
            }
            if ($object->isInitialized('regionId') && null !== $object->getRegionId()) {
                $data['region_id'] = $object->getRegionId();
            }
            if ($object->isInitialized('defaultEndpointSettings') && null !== $object->getDefaultEndpointSettings()) {
                $data['default_endpoint_settings'] = $this->normalizer->normalize($object->getDefaultEndpointSettings(), 'json', $context);
            }
            if ($object->isInitialized('pgVersion') && null !== $object->getPgVersion()) {
                $data['pg_version'] = $object->getPgVersion();
            }
            if ($object->isInitialized('storePasswords') && null !== $object->getStorePasswords()) {
                $data['store_passwords'] = $object->getStorePasswords();
            }
            if ($object->isInitialized('historyRetentionSeconds') && null !== $object->getHistoryRetentionSeconds()) {
                $data['history_retention_seconds'] = $object->getHistoryRetentionSeconds();
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
            return [\Vendor\Library\Generated\Model\ProjectCreateRequestProject::class => false];
        }
    }
}