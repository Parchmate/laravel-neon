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
    class VPCEndpointDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('vpc_endpoint_id', $data)) {
                $object->setVpcEndpointId($data['vpc_endpoint_id']);
                unset($data['vpc_endpoint_id']);
            }
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('num_restricted_projects', $data)) {
                $object->setNumRestrictedProjects($data['num_restricted_projects']);
                unset($data['num_restricted_projects']);
            }
            if (\array_key_exists('example_restricted_projects', $data)) {
                $values = [];
                foreach ($data['example_restricted_projects'] as $value) {
                    $values[] = $value;
                }
                $object->setExampleRestrictedProjects($values);
                unset($data['example_restricted_projects']);
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
            $data['vpc_endpoint_id'] = $object->getVpcEndpointId();
            $data['label'] = $object->getLabel();
            $data['state'] = $object->getState();
            $data['num_restricted_projects'] = $object->getNumRestrictedProjects();
            $values = [];
            foreach ($object->getExampleRestrictedProjects() as $value) {
                $values[] = $value;
            }
            $data['example_restricted_projects'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class => false];
        }
    }
} else {
    class VPCEndpointDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('vpc_endpoint_id', $data)) {
                $object->setVpcEndpointId($data['vpc_endpoint_id']);
                unset($data['vpc_endpoint_id']);
            }
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('num_restricted_projects', $data)) {
                $object->setNumRestrictedProjects($data['num_restricted_projects']);
                unset($data['num_restricted_projects']);
            }
            if (\array_key_exists('example_restricted_projects', $data)) {
                $values = [];
                foreach ($data['example_restricted_projects'] as $value) {
                    $values[] = $value;
                }
                $object->setExampleRestrictedProjects($values);
                unset($data['example_restricted_projects']);
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
            $data['vpc_endpoint_id'] = $object->getVpcEndpointId();
            $data['label'] = $object->getLabel();
            $data['state'] = $object->getState();
            $data['num_restricted_projects'] = $object->getNumRestrictedProjects();
            $values = [];
            foreach ($object->getExampleRestrictedProjects() as $value) {
                $values[] = $value;
            }
            $data['example_restricted_projects'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class => false];
        }
    }
}