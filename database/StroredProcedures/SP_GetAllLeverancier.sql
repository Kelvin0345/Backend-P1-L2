USE laravel;

DROP PROCEDURE IF EXISTS SP_GetAllLeverancier;

DELIMITER $$

CREATE PROCEDURE SP_GetAllLeverancier()
BEGIN
    SELECT
         LEVE.Naam AS NaamLeverancier
        ,LEVE.Contactpersoon AS Contactpersoon
        ,LEVE.Leveranciernummer
        ,LEVE.Mobiel
        ,COUNT(DISTINCT PROD.Naam) AS AantalVerschillendeProducten
    FROM Leverancier AS LEVE
    INNER JOIN ProductPerLeverancier AS PPLE ON LEVE.Id = PPLE.LeverancierId
    INNER JOIN Product AS PROD ON PROD.Id = PPLE.ProductId
    GROUP BY NaamLeverancier
    ORDER BY AantalVerschillendeProducten DESC;

END$$

DELIMITER 