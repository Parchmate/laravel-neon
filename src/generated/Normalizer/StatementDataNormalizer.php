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
    class StatementDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\StatementData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\StatementData::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\StatementData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fields', $data)) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $value;
                }
                $object->setFields($values);
                unset($data['fields']);
            }
            if (\array_key_exists('rows', $data)) {
                $values_1 = [];
                foreach ($data['rows'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setRows($values_1);
                unset($data['rows']);
            }
            if (\array_key_exists('truncated', $data)) {
                $object->setTruncated($data['truncated']);
                unset($data['truncated']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values = [];
                foreach ($object->getFields() as $value) {
                    $values[] = $value;
                }
                $data['fields'] = $values;
            }
            if ($object->isInitialized('rows') && null !== $object->getRows()) {
                $values_1 = [];
                foreach ($object->getRows() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['rows'] = $values_1;
            }
            $data['truncated'] = $object->getTruncated();
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\StatementData::class => false];
        }
    }
} else {
    class StatementDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\StatementData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\StatementData::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\StatementData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fields', $data)) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $value;
                }
                $object->setFields($values);
                unset($data['fields']);
            }
            if (\array_key_exists('rows', $data)) {
                $values_1 = [];
                foreach ($data['rows'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setRows($values_1);
                unset($data['rows']);
            }
            if (\array_key_exists('truncated', $data)) {
                $object->setTruncated($data['truncated']);
                unset($data['truncated']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values = [];
                foreach ($object->getFields() as $value) {
                    $values[] = $value;
                }
                $data['fields'] = $values;
            }
            if ($object->isInitialized('rows') && null !== $object->getRows()) {
                $values_1 = [];
                foreach ($object->getRows() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['rows'] = $values_1;
            }
            $data['truncated'] = $object->getTruncated();
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\StatementData::class => false];
        }
    }
}