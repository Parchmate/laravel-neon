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
    class StatementResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\StatementResult::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\StatementResult::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\StatementResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data', $data)) {
                $object->setData($this->denormalizer->denormalize($data['data'], \Parchmate\LaravelNeon\Generated\Model\StatementData::class, 'json', $context));
                unset($data['data']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('explain_data', $data)) {
                $values = [];
                foreach ($data['explain_data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\ExplainData::class, 'json', $context);
                }
                $object->setExplainData($values);
                unset($data['explain_data']);
            }
            if (\array_key_exists('query', $data)) {
                $object->setQuery($data['query']);
                unset($data['query']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('explainData') && null !== $object->getExplainData()) {
                $values = [];
                foreach ($object->getExplainData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['explain_data'] = $values;
            }
            $data['query'] = $object->getQuery();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\StatementResult::class => false];
        }
    }
} else {
    class StatementResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\StatementResult::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\StatementResult::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\StatementResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data', $data)) {
                $object->setData($this->denormalizer->denormalize($data['data'], \Parchmate\LaravelNeon\Generated\Model\StatementData::class, 'json', $context));
                unset($data['data']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('explain_data', $data)) {
                $values = [];
                foreach ($data['explain_data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\ExplainData::class, 'json', $context);
                }
                $object->setExplainData($values);
                unset($data['explain_data']);
            }
            if (\array_key_exists('query', $data)) {
                $object->setQuery($data['query']);
                unset($data['query']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('explainData') && null !== $object->getExplainData()) {
                $values = [];
                foreach ($object->getExplainData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['explain_data'] = $values;
            }
            $data['query'] = $object->getQuery();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\StatementResult::class => false];
        }
    }
}