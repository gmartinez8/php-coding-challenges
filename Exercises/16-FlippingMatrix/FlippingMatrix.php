<?php
/**
 * 
 * Consider an (r, c) element. 
 * 
 * One can observe that it can only be in one of the following four positions: 
 * - (r, c)
 * - (r, N - c - 1)
 * - (N - r - 1, c)
 * - or (N - 1 - r, N - 1 - c)
 * 
 * One can show that there is always a sequence of operations that places 
 * the largest of the four numbers located in the vertices of the rectangle 
 * described above to the upper-left quadrant without changing the rest of it 
 * 
 */

function  flipping_matrix($matrix) {
    $result = 0;
    $size = count($matrix);

    for ($i = 0; $i < $size / 2; $i++) {
        for ($j = 0; $j < $size / 2; $j++) {
            $max = max(
                $matrix[$i][$j], 
                $matrix[$i][$size - $j - 1], 
                $matrix[$size - $i - 1][$j],
                $matrix[$size - $i - 1][$size - $j - 1]
            );

            $result += $max;
        }
    }

    return $result;
}
