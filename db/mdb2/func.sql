DROP FUNCTION COUNT_REQ_BY_CDATE( int8 );

CREATE FUNCTION COUNT_REQ_BY_CDATE( int8 ) RETURNS INTEGER AS '
DECLARE
  ad_cdate  ALIAS FOR $1;
  ln_cntval INTEGER;
BEGIN
      SELECT COUNT(*) INTO ln_cntval FROM test
       WHERE no = ad_cdate;

      return ln_cntval;
END;
' LANGUAGE 'plpgsql';
-- end.
