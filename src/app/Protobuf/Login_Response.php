<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : protobuf.proto
 */


namespace app\Protobuf;

/**
 * Protobuf message : youwo.Login_Response
 */
class Login_Response extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * cmd_service optional enum = 100
     *
     * @var \app\Protobuf\CMD_SERVICE
     */
    protected $cmd_service = null;

    /**
     * cmd_method optional enum = 101
     *
     * @var \app\Protobuf\CMD_METHOD
     */
    protected $cmd_method = null;

    /**
     * username required string = 1
     *
     * @var string
     */
    protected $username = null;

    /**
     * password required string = 2
     *
     * @var string
     */
    protected $password = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->cmd_service = \app\Protobuf\CMD_SERVICE::Account();
        $this->cmd_method = \app\Protobuf\CMD_METHOD::Login();

        parent::__construct($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if (!isset($values['username'])) {
            throw new \InvalidArgumentException('Field "username" (tag 1) is required but has no value.');
        }

        if (!isset($values['password'])) {
            throw new \InvalidArgumentException('Field "password" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'cmd_service' => \app\Protobuf\CMD_SERVICE::Account(),
            'cmd_method' => \app\Protobuf\CMD_METHOD::Login(),
        ], $values);

        $message->setCmdService($values['cmd_service']);
        $message->setCmdMethod($values['cmd_method']);
        $message->setUsername($values['username']);
        $message->setPassword($values['password']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name' => 'Login_Response',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 100,
                    'name' => 'cmd_service',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.youwo.CMD_SERVICE',
                    'default_value' => \app\Protobuf\CMD_SERVICE::Account()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 101,
                    'name' => 'cmd_method',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.youwo.CMD_METHOD',
                    'default_value' => \app\Protobuf\CMD_METHOD::Login()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'username',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'password',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
            ],
        ]);
    }

    /**
     * Check if 'cmd_service' has a value
     *
     * @return bool
     */
    public function hasCmdService()
    {
        return $this->cmd_service !== null;
    }

    /**
     * Get 'cmd_service' value
     *
     * @return \app\Protobuf\CMD_SERVICE
     */
    public function getCmdService()
    {
        return $this->cmd_service;
    }

    /**
     * Set 'cmd_service' value
     *
     * @param \app\Protobuf\CMD_SERVICE $value
     */
    public function setCmdService(\app\Protobuf\CMD_SERVICE $value = null)
    {
        $this->cmd_service = $value;
    }

    /**
     * Check if 'cmd_method' has a value
     *
     * @return bool
     */
    public function hasCmdMethod()
    {
        return $this->cmd_method !== null;
    }

    /**
     * Get 'cmd_method' value
     *
     * @return \app\Protobuf\CMD_METHOD
     */
    public function getCmdMethod()
    {
        return $this->cmd_method;
    }

    /**
     * Set 'cmd_method' value
     *
     * @param \app\Protobuf\CMD_METHOD $value
     */
    public function setCmdMethod(\app\Protobuf\CMD_METHOD $value = null)
    {
        $this->cmd_method = $value;
    }

    /**
     * Check if 'username' has a value
     *
     * @return bool
     */
    public function hasUsername()
    {
        return $this->username !== null;
    }

    /**
     * Get 'username' value
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set 'username' value
     *
     * @param string $value
     */
    public function setUsername($value)
    {
        $this->username = $value;
    }

    /**
     * Check if 'password' has a value
     *
     * @return bool
     */
    public function hasPassword()
    {
        return $this->password !== null;
    }

    /**
     * Get 'password' value
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set 'password' value
     *
     * @param string $value
     */
    public function setPassword($value)
    {
        $this->password = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream = $context->getStream();
        $writer = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->username === null) {
            throw new \UnexpectedValueException('Field "\\app\\Protobuf\\Login_Response#username" (tag 1) is required but has no value.');
        }

        if ($this->password === null) {
            throw new \UnexpectedValueException('Field "\\app\\Protobuf\\Login_Response#password" (tag 2) is required but has no value.');
        }

        if ($this->cmd_service !== null) {
            $writer->writeVarint($stream, 800);
            $writer->writeVarint($stream, $this->cmd_service->value());
        }

        if ($this->cmd_method !== null) {
            $writer->writeVarint($stream, 808);
            $writer->writeVarint($stream, $this->cmd_method->value());
        }

        if ($this->username !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->username);
        }

        if ($this->password !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->password);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {
            if ($stream->eof()) {
                break;
            }

            $key = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 100) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->cmd_service = \app\Protobuf\CMD_SERVICE::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 101) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->cmd_method = \app\Protobuf\CMD_METHOD::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->username = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->password = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ($this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size = 0;

        if ($this->cmd_service !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->cmd_service->value());
        }

        if ($this->cmd_method !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->cmd_method->value());
        }

        if ($this->username !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->username);
        }

        if ($this->password !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->password);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->cmd_service = \app\Protobuf\CMD_SERVICE::Account();
        $this->cmd_method = \app\Protobuf\CMD_METHOD::Login();
        $this->username = null;
        $this->password = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \app\Protobuf\Login_Response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->cmd_service = ($message->cmd_service !== null) ? $message->cmd_service : $this->cmd_service;
        $this->cmd_method = ($message->cmd_method !== null) ? $message->cmd_method : $this->cmd_method;
        $this->username = ($message->username !== null) ? $message->username : $this->username;
        $this->password = ($message->password !== null) ? $message->password : $this->password;
    }
}
