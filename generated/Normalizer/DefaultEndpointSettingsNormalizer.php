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
    class DefaultEndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\DefaultEndpointSettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\DefaultEndpointSettings::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\DefaultEndpointSettings();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pg_settings', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['pg_settings'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPgSettings($values);
                unset($data['pg_settings']);
            }
            if (\array_key_exists('pgbouncer_settings', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['pgbouncer_settings'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setPgbouncerSettings($values_1);
                unset($data['pgbouncer_settings']);
            }
            if (\array_key_exists('autoscaling_limit_min_cu', $data)) {
                $object->setAutoscalingLimitMinCu($data['autoscaling_limit_min_cu']);
                unset($data['autoscaling_limit_min_cu']);
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data)) {
                $object->setAutoscalingLimitMaxCu($data['autoscaling_limit_max_cu']);
                unset($data['autoscaling_limit_max_cu']);
            }
            if (\array_key_exists('suspend_timeout_seconds', $data)) {
                $object->setSuspendTimeoutSeconds($data['suspend_timeout_seconds']);
                unset($data['suspend_timeout_seconds']);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('pgSettings') && null !== $object->getPgSettings()) {
                $values = [];
                foreach ($object->getPgSettings() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['pg_settings'] = $values;
            }
            if ($object->isInitialized('pgbouncerSettings') && null !== $object->getPgbouncerSettings()) {
                $values_1 = [];
                foreach ($object->getPgbouncerSettings() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['pgbouncer_settings'] = $values_1;
            }
            if ($object->isInitialized('autoscalingLimitMinCu') && null !== $object->getAutoscalingLimitMinCu()) {
                $data['autoscaling_limit_min_cu'] = $object->getAutoscalingLimitMinCu();
            }
            if ($object->isInitialized('autoscalingLimitMaxCu') && null !== $object->getAutoscalingLimitMaxCu()) {
                $data['autoscaling_limit_max_cu'] = $object->getAutoscalingLimitMaxCu();
            }
            if ($object->isInitialized('suspendTimeoutSeconds') && null !== $object->getSuspendTimeoutSeconds()) {
                $data['suspend_timeout_seconds'] = $object->getSuspendTimeoutSeconds();
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\DefaultEndpointSettings::class => false];
        }
    }
} else {
    class DefaultEndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\DefaultEndpointSettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\DefaultEndpointSettings::class;
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
            $object = new \Vendor\Library\Generated\Model\DefaultEndpointSettings();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('pg_settings', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['pg_settings'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPgSettings($values);
                unset($data['pg_settings']);
            }
            if (\array_key_exists('pgbouncer_settings', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['pgbouncer_settings'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setPgbouncerSettings($values_1);
                unset($data['pgbouncer_settings']);
            }
            if (\array_key_exists('autoscaling_limit_min_cu', $data)) {
                $object->setAutoscalingLimitMinCu($data['autoscaling_limit_min_cu']);
                unset($data['autoscaling_limit_min_cu']);
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data)) {
                $object->setAutoscalingLimitMaxCu($data['autoscaling_limit_max_cu']);
                unset($data['autoscaling_limit_max_cu']);
            }
            if (\array_key_exists('suspend_timeout_seconds', $data)) {
                $object->setSuspendTimeoutSeconds($data['suspend_timeout_seconds']);
                unset($data['suspend_timeout_seconds']);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
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
            if ($object->isInitialized('pgSettings') && null !== $object->getPgSettings()) {
                $values = [];
                foreach ($object->getPgSettings() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['pg_settings'] = $values;
            }
            if ($object->isInitialized('pgbouncerSettings') && null !== $object->getPgbouncerSettings()) {
                $values_1 = [];
                foreach ($object->getPgbouncerSettings() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['pgbouncer_settings'] = $values_1;
            }
            if ($object->isInitialized('autoscalingLimitMinCu') && null !== $object->getAutoscalingLimitMinCu()) {
                $data['autoscaling_limit_min_cu'] = $object->getAutoscalingLimitMinCu();
            }
            if ($object->isInitialized('autoscalingLimitMaxCu') && null !== $object->getAutoscalingLimitMaxCu()) {
                $data['autoscaling_limit_max_cu'] = $object->getAutoscalingLimitMaxCu();
            }
            if ($object->isInitialized('suspendTimeoutSeconds') && null !== $object->getSuspendTimeoutSeconds()) {
                $data['suspend_timeout_seconds'] = $object->getSuspendTimeoutSeconds();
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\DefaultEndpointSettings::class => false];
        }
    }
}