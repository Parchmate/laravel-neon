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
    class EndpointCreateRequestEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Vendor\Library\Generated\Model\EndpointSettingsData::class, 'json', $context));
                unset($data['settings']);
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
            if (\array_key_exists('pooler_enabled', $data)) {
                $object->setPoolerEnabled($data['pooler_enabled']);
                unset($data['pooler_enabled']);
            }
            if (\array_key_exists('pooler_mode', $data)) {
                $object->setPoolerMode($data['pooler_mode']);
                unset($data['pooler_mode']);
            }
            if (\array_key_exists('disabled', $data)) {
                $object->setDisabled($data['disabled']);
                unset($data['disabled']);
            }
            if (\array_key_exists('passwordless_access', $data)) {
                $object->setPasswordlessAccess($data['passwordless_access']);
                unset($data['passwordless_access']);
            }
            if (\array_key_exists('suspend_timeout_seconds', $data)) {
                $object->setSuspendTimeoutSeconds($data['suspend_timeout_seconds']);
                unset($data['suspend_timeout_seconds']);
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
            $data['branch_id'] = $object->getBranchId();
            if ($object->isInitialized('regionId') && null !== $object->getRegionId()) {
                $data['region_id'] = $object->getRegionId();
            }
            $data['type'] = $object->getType();
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
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
            if ($object->isInitialized('poolerEnabled') && null !== $object->getPoolerEnabled()) {
                $data['pooler_enabled'] = $object->getPoolerEnabled();
            }
            if ($object->isInitialized('poolerMode') && null !== $object->getPoolerMode()) {
                $data['pooler_mode'] = $object->getPoolerMode();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('passwordlessAccess') && null !== $object->getPasswordlessAccess()) {
                $data['passwordless_access'] = $object->getPasswordlessAccess();
            }
            if ($object->isInitialized('suspendTimeoutSeconds') && null !== $object->getSuspendTimeoutSeconds()) {
                $data['suspend_timeout_seconds'] = $object->getSuspendTimeoutSeconds();
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
            return [\Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class => false];
        }
    }
} else {
    class EndpointCreateRequestEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class;
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
            $object = new \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Vendor\Library\Generated\Model\EndpointSettingsData::class, 'json', $context));
                unset($data['settings']);
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
            if (\array_key_exists('pooler_enabled', $data)) {
                $object->setPoolerEnabled($data['pooler_enabled']);
                unset($data['pooler_enabled']);
            }
            if (\array_key_exists('pooler_mode', $data)) {
                $object->setPoolerMode($data['pooler_mode']);
                unset($data['pooler_mode']);
            }
            if (\array_key_exists('disabled', $data)) {
                $object->setDisabled($data['disabled']);
                unset($data['disabled']);
            }
            if (\array_key_exists('passwordless_access', $data)) {
                $object->setPasswordlessAccess($data['passwordless_access']);
                unset($data['passwordless_access']);
            }
            if (\array_key_exists('suspend_timeout_seconds', $data)) {
                $object->setSuspendTimeoutSeconds($data['suspend_timeout_seconds']);
                unset($data['suspend_timeout_seconds']);
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
            $data['branch_id'] = $object->getBranchId();
            if ($object->isInitialized('regionId') && null !== $object->getRegionId()) {
                $data['region_id'] = $object->getRegionId();
            }
            $data['type'] = $object->getType();
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
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
            if ($object->isInitialized('poolerEnabled') && null !== $object->getPoolerEnabled()) {
                $data['pooler_enabled'] = $object->getPoolerEnabled();
            }
            if ($object->isInitialized('poolerMode') && null !== $object->getPoolerMode()) {
                $data['pooler_mode'] = $object->getPoolerMode();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('passwordlessAccess') && null !== $object->getPasswordlessAccess()) {
                $data['passwordless_access'] = $object->getPasswordlessAccess();
            }
            if ($object->isInitialized('suspendTimeoutSeconds') && null !== $object->getSuspendTimeoutSeconds()) {
                $data['suspend_timeout_seconds'] = $object->getSuspendTimeoutSeconds();
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
            return [\Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class => false];
        }
    }
}