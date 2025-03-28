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
    class BranchCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BranchCreateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BranchCreateRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\BranchCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endpoints', $data)) {
                $values = [];
                foreach ($data['endpoints'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\BranchCreateRequestEndpointOptions::class, 'json', $context);
                }
                $object->setEndpoints($values);
                unset($data['endpoints']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class, 'json', $context));
                unset($data['branch']);
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
            if ($object->isInitialized('endpoints') && null !== $object->getEndpoints()) {
                $values = [];
                foreach ($object->getEndpoints() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['endpoints'] = $values;
            }
            if ($object->isInitialized('branch') && null !== $object->getBranch()) {
                $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BranchCreateRequest::class => false];
        }
    }
} else {
    class BranchCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BranchCreateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BranchCreateRequest::class;
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
            $object = new \Vendor\Library\Generated\Model\BranchCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endpoints', $data)) {
                $values = [];
                foreach ($data['endpoints'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\BranchCreateRequestEndpointOptions::class, 'json', $context);
                }
                $object->setEndpoints($values);
                unset($data['endpoints']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class, 'json', $context));
                unset($data['branch']);
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
            if ($object->isInitialized('endpoints') && null !== $object->getEndpoints()) {
                $values = [];
                foreach ($object->getEndpoints() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['endpoints'] = $values;
            }
            if ($object->isInitialized('branch') && null !== $object->getBranch()) {
                $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BranchCreateRequest::class => false];
        }
    }
}