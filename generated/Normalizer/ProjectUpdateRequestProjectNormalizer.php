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
    class ProjectUpdateRequestProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ProjectUpdateRequestProject();
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
            if (\array_key_exists('default_endpoint_settings', $data)) {
                $object->setDefaultEndpointSettings($this->denormalizer->denormalize($data['default_endpoint_settings'], \Vendor\Library\Generated\Model\DefaultEndpointSettings::class, 'json', $context));
                unset($data['default_endpoint_settings']);
            }
            if (\array_key_exists('history_retention_seconds', $data)) {
                $object->setHistoryRetentionSeconds($data['history_retention_seconds']);
                unset($data['history_retention_seconds']);
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
            if ($object->isInitialized('defaultEndpointSettings') && null !== $object->getDefaultEndpointSettings()) {
                $data['default_endpoint_settings'] = $this->normalizer->normalize($object->getDefaultEndpointSettings(), 'json', $context);
            }
            if ($object->isInitialized('historyRetentionSeconds') && null !== $object->getHistoryRetentionSeconds()) {
                $data['history_retention_seconds'] = $object->getHistoryRetentionSeconds();
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
            return [\Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class => false];
        }
    }
} else {
    class ProjectUpdateRequestProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class;
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
            $object = new \Vendor\Library\Generated\Model\ProjectUpdateRequestProject();
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
            if (\array_key_exists('default_endpoint_settings', $data)) {
                $object->setDefaultEndpointSettings($this->denormalizer->denormalize($data['default_endpoint_settings'], \Vendor\Library\Generated\Model\DefaultEndpointSettings::class, 'json', $context));
                unset($data['default_endpoint_settings']);
            }
            if (\array_key_exists('history_retention_seconds', $data)) {
                $object->setHistoryRetentionSeconds($data['history_retention_seconds']);
                unset($data['history_retention_seconds']);
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
            if ($object->isInitialized('defaultEndpointSettings') && null !== $object->getDefaultEndpointSettings()) {
                $data['default_endpoint_settings'] = $this->normalizer->normalize($object->getDefaultEndpointSettings(), 'json', $context);
            }
            if ($object->isInitialized('historyRetentionSeconds') && null !== $object->getHistoryRetentionSeconds()) {
                $data['history_retention_seconds'] = $object->getHistoryRetentionSeconds();
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
            return [\Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class => false];
        }
    }
}