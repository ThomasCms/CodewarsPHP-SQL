SELECT ARRAY_AGG(ROW ORDER BY J) MATRIX
FROM (SELECT MRX_NUM, J, ARRAY_AGG(ROW ORDER BY I) AS ROW
      FROM (SELECT MRX_NUM, I, J, MATRIX [ I ] [ J ] AS ROW
            FROM (SELECT GENERATE_SUBSCRIPTS(MATRIX, 2) J, T1.*
                  FROM (SELECT ROW_NUMBER() OVER() AS MRX_NUM,
                               GENERATE_SUBSCRIPTS(MATRIX, 1) AS I,
                               MATRIX
                        FROM PUBLIC.MATRICES) T1) T2) T3
      GROUP BY MRX_NUM, J) T4
GROUP BY MRX_NUM;