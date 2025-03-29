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
    class EndpointOperationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\EndpointOperations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endpoint', $data)) {
                $object->setEndpoint($this->denormalizer->denormalize($data['endpoint'], \Parchmate\LaravelNeon\Generated\Model\Endpoint::class, 'json', $context));
                unset($data['endpoint']);
            }
            if (\array_key_exists('operations', $data)) {
                $values = [];
                foreach ($data['operations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\Operation::class, 'json', $context);
                }
                $object->setOperations($values);
                unset($data['operations']);
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
            $data['endpoint'] = $this->normalizer->normalize($object->getEndpoint(), 'json', $context);
            $values = [];
            foreach ($object->getOperations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['operations'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class => false];
        }
    }
} else {
    class EndpointOperationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\EndpointOperations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endpoint', $data)) {
                $object->setEndpoint($this->denormalizer->denormalize($data['endpoint'], \Parchmate\LaravelNeon\Generated\Model\Endpoint::class, 'json', $context));
                unset($data['endpoint']);
            }
            if (\array_key_exists('operations', $data)) {
                $values = [];
                foreach ($data['operations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\Operation::class, 'json', $context);
                }
                $object->setOperations($values);
                unset($data['operations']);
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
            $data['endpoint'] = $this->normalizer->normalize($object->getEndpoint(), 'json', $context);
            $values = [];
            foreach ($object->getOperations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['operations'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class => false];
        }
    }
}