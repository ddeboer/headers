<?php

namespace Ddeboer\Headers;

class HeaderCollection extends Collection
{
    public function get($key)
    {
        return parent::get(self::normalizeKey($key));
    }

    /**
     * Create a header collection from a headers string
     *
     * @param string $headers Headers string
     */
    public static function fromString($headers)
    {
        return new self(self::parseHeaders($headers));
    }

    /**
     * Parse headers into key/value pairs
     *
     * @param string $headers Unparsed headers as string
     *
     * @return array Parsed headers
     */
    protected static function parseHeaders($headers)
    {
        $lines = preg_split('/\\r?\\n/', $headers, -1);
        $headers = array();
        foreach ($lines as $line) {
            if (strpos($line, ': ')) {
                // Start of header field
                $parts = \explode(': ', $line, 2);
                $key = self::normalizeKey(trim($parts[0]));
                $value = trim($parts[1]);

                if (!isset($headers[$key])) {
                    $headers[$key] = $value;
                } elseif (!is_array($headers[$key])) {
                    $headers[$key] = array($headers[$key], $value);
                } else {
                    $headers[$key][] = $value;
                }
            } else {
                // Continuation of header field
                $value = trim($line);

                if (is_array($headers[$key])) {
                    $headers[$key][] = array_pop($headers[$key]) . $value;
                } else {
                    $headers[$key] .= $value;
                }
            }
        }

        return $headers;
    }

    protected static function normalizeKey($key)
    {
        return strtolower($key);
    }
}