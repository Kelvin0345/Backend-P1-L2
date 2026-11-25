USE laravel;

DROP PROCEDURE IF EXISTS SP_GetLeverancierByUpdateId;

DELIMITER $$

CREATE PROCEDURE SP_GetLeverancierByUpdateId(
    IN p_id INT
)
BEGIN
    SELECT
         LEVE.Id AS LeverancierId
        ,LEVE.Naam AS NaamLeverancier
        ,LEVE.Contactpersoon AS Contactpersoon
        ,LEVE.Leveranciernummer
        ,LEVE.Mobiel
        ,CON.Id AS ContactId
        ,CON.Straat
        ,CON.Huisnummer
        ,CON.Postcode
        ,CON.Stad
    FROM Leverancier AS LEVE
    INNER JOIN Contact AS CON
        ON LEVE.ContactId = CON.Id
    WHERE LEVE.Id = p_id;
END$$

DELIMITER ;