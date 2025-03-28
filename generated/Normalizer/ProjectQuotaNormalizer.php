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
    class ProjectQuotaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectQuota::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectQuota::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ProjectQuota();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_time_seconds', $data)) {
                $object->setActiveTimeSeconds($data['active_time_seconds']);
                unset($data['active_time_seconds']);
            }
            if (\array_key_exists('compute_time_seconds', $data)) {
                $object->setComputeTimeSeconds($data['compute_time_seconds']);
                unset($data['compute_time_seconds']);
            }
            if (\array_key_exists('written_data_bytes', $data)) {
                $object->setWrittenDataBytes($data['written_data_bytes']);
                unset($data['written_data_bytes']);
            }
            if (\array_key_exists('data_transfer_bytes', $data)) {
                $object->setDataTransferBytes($data['data_transfer_bytes']);
                unset($data['data_transfer_bytes']);
            }
            if (\array_key_exists('logical_size_bytes', $data)) {
                $object->setLogicalSizeBytes($data['logical_size_bytes']);
                unset($data['logical_size_bytes']);
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
            if ($object->isInitialized('activeTimeSeconds') && null !== $object->getActiveTimeSeconds()) {
                $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            }
            if ($object->isInitialized('computeTimeSeconds') && null !== $object->getComputeTimeSeconds()) {
                $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            }
            if ($object->isInitialized('writtenDataBytes') && null !== $object->getWrittenDataBytes()) {
                $data['written_data_bytes'] = $object->getWrittenDataBytes();
            }
            if ($object->isInitialized('dataTransferBytes') && null !== $object->getDataTransferBytes()) {
                $data['data_transfer_bytes'] = $object->getDataTransferBytes();
            }
            if ($object->isInitialized('logicalSizeBytes') && null !== $object->getLogicalSizeBytes()) {
                $data['logical_size_bytes'] = $object->getLogicalSizeBytes();
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
            return [\Vendor\Library\Generated\Model\ProjectQuota::class => false];
        }
    }
} else {
    class ProjectQuotaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectQuota::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectQuota::class;
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
            $object = new \Vendor\Library\Generated\Model\ProjectQuota();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_time_seconds', $data)) {
                $object->setActiveTimeSeconds($data['active_time_seconds']);
                unset($data['active_time_seconds']);
            }
            if (\array_key_exists('compute_time_seconds', $data)) {
                $object->setComputeTimeSeconds($data['compute_time_seconds']);
                unset($data['compute_time_seconds']);
            }
            if (\array_key_exists('written_data_bytes', $data)) {
                $object->setWrittenDataBytes($data['written_data_bytes']);
                unset($data['written_data_bytes']);
            }
            if (\array_key_exists('data_transfer_bytes', $data)) {
                $object->setDataTransferBytes($data['data_transfer_bytes']);
                unset($data['data_transfer_bytes']);
            }
            if (\array_key_exists('logical_size_bytes', $data)) {
                $object->setLogicalSizeBytes($data['logical_size_bytes']);
                unset($data['logical_size_bytes']);
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
            if ($object->isInitialized('activeTimeSeconds') && null !== $object->getActiveTimeSeconds()) {
                $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            }
            if ($object->isInitialized('computeTimeSeconds') && null !== $object->getComputeTimeSeconds()) {
                $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            }
            if ($object->isInitialized('writtenDataBytes') && null !== $object->getWrittenDataBytes()) {
                $data['written_data_bytes'] = $object->getWrittenDataBytes();
            }
            if ($object->isInitialized('dataTransferBytes') && null !== $object->getDataTransferBytes()) {
                $data['data_transfer_bytes'] = $object->getDataTransferBytes();
            }
            if ($object->isInitialized('logicalSizeBytes') && null !== $object->getLogicalSizeBytes()) {
                $data['logical_size_bytes'] = $object->getLogicalSizeBytes();
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
            return [\Vendor\Library\Generated\Model\ProjectQuota::class => false];
        }
    }
}