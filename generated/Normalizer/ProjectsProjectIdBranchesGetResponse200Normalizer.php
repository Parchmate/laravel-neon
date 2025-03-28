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
    class ProjectsProjectIdBranchesGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branches', $data)) {
                $values = [];
                foreach ($data['branches'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\Branch::class, 'json', $context);
                }
                $object->setBranches($values);
                unset($data['branches']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['annotations'] as $key => $value_1) {
                    $values_1[$key] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\AnnotationData::class, 'json', $context);
                }
                $object->setAnnotations($values_1);
                unset($data['annotations']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], \Vendor\Library\Generated\Model\CursorPagination::class, 'json', $context));
                unset($data['pagination']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getBranches() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['branches'] = $values;
            $values_1 = [];
            foreach ($object->getAnnotations() as $key => $value_1) {
                $values_1[$key] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['annotations'] = $values_1;
            if ($object->isInitialized('pagination') && null !== $object->getPagination()) {
                $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => false];
        }
    }
} else {
    class ProjectsProjectIdBranchesGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class;
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
            $object = new \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branches', $data)) {
                $values = [];
                foreach ($data['branches'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\Branch::class, 'json', $context);
                }
                $object->setBranches($values);
                unset($data['branches']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['annotations'] as $key => $value_1) {
                    $values_1[$key] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\AnnotationData::class, 'json', $context);
                }
                $object->setAnnotations($values_1);
                unset($data['annotations']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], \Vendor\Library\Generated\Model\CursorPagination::class, 'json', $context));
                unset($data['pagination']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            $values = [];
            foreach ($object->getBranches() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['branches'] = $values;
            $values_1 = [];
            foreach ($object->getAnnotations() as $key => $value_1) {
                $values_1[$key] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['annotations'] = $values_1;
            if ($object->isInitialized('pagination') && null !== $object->getPagination()) {
                $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => false];
        }
    }
}