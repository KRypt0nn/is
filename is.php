<?php

/**
 * @author Podvirnyy Nikita
 * @license gpl-3.0
 * @link vk.com/technomindlp
 * <suimin.tu.mu.ga.mi@gmail.com>
 */

function is ($param)
{
    return is_scalar ($param) && strlen ($param) > 0 || !is_scalar ($param) && !is_null ($param);
}
