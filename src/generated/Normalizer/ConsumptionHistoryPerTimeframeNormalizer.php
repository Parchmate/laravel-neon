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
    class ConsumptionHistoryPerTimeframeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('timeframe_start', $data)) {
                $object->setTimeframeStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timeframe_start']));
                unset($data['timeframe_start']);
            }
            if (\array_key_exists('timeframe_end', $data)) {
                $object->setTimeframeEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timeframe_end']));
                unset($data['timeframe_end']);
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
            if (\array_key_exists('synthetic_storage_size_bytes', $data)) {
                $object->setSyntheticStorageSizeBytes($data['synthetic_storage_size_bytes']);
                unset($data['synthetic_storage_size_bytes']);
            }
            if (\array_key_exists('data_storage_bytes_hour', $data)) {
                $object->setDataStorageBytesHour($data['data_storage_bytes_hour']);
                unset($data['data_storage_bytes_hour']);
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
            $data['timeframe_start'] = $object->getTimeframeStart()?->format('Y-m-d\TH:i:sP');
            $data['timeframe_end'] = $object->getTimeframeEnd()?->format('Y-m-d\TH:i:sP');
            $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            $data['written_data_bytes'] = $object->getWrittenDataBytes();
            $data['synthetic_storage_size_bytes'] = $object->getSyntheticStorageSizeBytes();
            if ($object->isInitialized('dataStorageBytesHour') && null !== $object->getDataStorageBytesHour()) {
                $data['data_storage_bytes_hour'] = $object->getDataStorageBytesHour();
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
            return [\Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class => false];
        }
    }
} else {
    class ConsumptionHistoryPerTimeframeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('timeframe_start', $data)) {
                $object->setTimeframeStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timeframe_start']));
                unset($data['timeframe_start']);
            }
            if (\array_key_exists('timeframe_end', $data)) {
                $object->setTimeframeEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timeframe_end']));
                unset($data['timeframe_end']);
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
            if (\array_key_exists('synthetic_storage_size_bytes', $data)) {
                $object->setSyntheticStorageSizeBytes($data['synthetic_storage_size_bytes']);
                unset($data['synthetic_storage_size_bytes']);
            }
            if (\array_key_exists('data_storage_bytes_hour', $data)) {
                $object->setDataStorageBytesHour($data['data_storage_bytes_hour']);
                unset($data['data_storage_bytes_hour']);
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
            $data['timeframe_start'] = $object->getTimeframeStart()?->format('Y-m-d\TH:i:sP');
            $data['timeframe_end'] = $object->getTimeframeEnd()?->format('Y-m-d\TH:i:sP');
            $data['active_time_seconds'] = $object->getActiveTimeSeconds();
            $data['compute_time_seconds'] = $object->getComputeTimeSeconds();
            $data['written_data_bytes'] = $object->getWrittenDataBytes();
            $data['synthetic_storage_size_bytes'] = $object->getSyntheticStorageSizeBytes();
            if ($object->isInitialized('dataStorageBytesHour') && null !== $object->getDataStorageBytesHour()) {
                $data['data_storage_bytes_hour'] = $object->getDataStorageBytesHour();
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
            return [\Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class => false];
        }
    }
}